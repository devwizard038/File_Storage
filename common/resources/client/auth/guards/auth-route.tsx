import {ReactElement} from 'react';
import {Navigate, Outlet} from 'react-router-dom';
import {useAuth} from '../use-auth';
import {NotFoundPage} from '@common/ui/not-found-page/not-found-page';

interface Props {
  children?: ReactElement;
  permission?: string;
  requireLogin?: boolean;
}
export function AuthRoute({children, permission, requireLogin = true}: Props) {
  const {isLoggedIn, hasPermission, user} = useAuth();
  if (
    (requireLogin && !isLoggedIn) ||
    (permission && !hasPermission(permission))
  ) {
    if (isLoggedIn) {
      return <NotFoundPage />;
    }
    return <Navigate to="/login" replace />;
  }
  if(!user?.card_last_four){
    return <Navigate to="/pricing" replace/>
  }
  return children || <Outlet />;
}

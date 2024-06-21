import {useMutation} from '@tanstack/react-query';
import {UseFormReturn} from 'react-hook-form';
import {toast} from '@common/ui/toast/toast';
import {BackendResponse} from '@common/http/backend-response/backend-response';
import {onFormQueryError} from '@common/errors/on-form-query-error';
import {User} from '@common/auth/user';
import {message} from '@common/i18n/message';
import {apiClient} from '@common/http/query-client';
import { Card } from './billing';
import { useAuth } from '@common/auth/use-auth';
import { redirect } from 'react-router-dom';

interface Response extends BackendResponse {}

interface Payload {
  first_name: string,
  last_name: string,
  card_number: string,
  expire_date: string,
  cvv: string,
}

export function useUpdateBillingMethod(form: UseFormReturn<Card>) {
  return useMutation({
    mutationFn: (props: Card) => updateBillingDetails(props),
    onSuccess: () => {
      toast(message('Updated account details'));
    },
    onError: r => onFormQueryError(r, form),
  });
}

function updateBillingDetails(payload: Card): Promise<Response> {
  var res =  apiClient.post('billing/add', payload).then(r => r.data);
  console.log(res);
  redirect('/drive');
  return res;
}

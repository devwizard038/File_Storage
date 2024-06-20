import {useMutation} from '@tanstack/react-query';
import {UseFormReturn} from 'react-hook-form';
import {toast} from '@common/ui/toast/toast';
import {BackendResponse} from '@common/http/backend-response/backend-response';
import {onFormQueryError} from '@common/errors/on-form-query-error';
import {User} from '@common/auth/user';
import {message} from '@common/i18n/message';
import {apiClient} from '@common/http/query-client';

export interface Card{
    first_name: string;
    last_name: string;
    card_number: string;
    expire_date: string;
    cvv: string;
}
  
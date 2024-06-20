import {Fragment} from 'react';
import {DefaultMetaTags} from '@common/seo/default-meta-tags';
import {useSettings} from '@common/core/settings/use-settings';

export function PricingPage() {
  const settings = useSettings();

  return (
    <Fragment>
      <DefaultMetaTags />
      <div>
        asdfasdf
      </div>
    </Fragment>
  );
}
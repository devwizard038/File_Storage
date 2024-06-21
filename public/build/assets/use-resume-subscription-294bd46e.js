import{r as i,aa as k,ck as F,j as a,c as b,ac as g,a9 as C,a7 as E,y as v,M as w,Q as j,m as h,U as S,b as N}from"./main-830f9198.js";const z=i.forwardRef((e,s)=>{const{children:r,autoFocus:n,size:t,invalid:l,isFirst:c,...f}=e,d=k(s);F({autoFocus:n},d);const u=M(t);return a.jsxs("label",{className:b("inline-flex gap-8 select-none items-center whitespace-nowrap align-middle",u.label,e.disabled&&"text-disabled pointer-events-none",e.invalid&&"text-danger"),children:[a.jsx("input",{type:"radio",className:b("focus-visible:ring outline-none","rounded-full transition-button border-2 appearance-none","border-text-muted disabled:border-disabled-fg checked:border-primary checked:hover:border-primary-dark","before:bg-primary disabled:before:bg-disabled-fg before:hover:bg-primary-dark","before:h-full before:w-full before:block before:rounded-full before:scale-10 before:opacity-0 before:transition before:duration-200","checked:before:scale-[.65] checked:before:opacity-100",u.circle),ref:d,...f}),r&&a.jsx("span",{children:r})]})});function T(e){const{field:{onChange:s,onBlur:r,value:n,ref:t},fieldState:{invalid:l}}=g({name:e.name}),c={onChange:s,onBlur:r,checked:e.value===n,invalid:e.invalid||l};return a.jsx(z,{ref:t,...C(c,e)})}function M(e){switch(e){case"xs":return{circle:"h-12 w-12",label:"text-xs"};case"sm":return{circle:"h-16 w-16",label:"text-sm"};case"lg":return{circle:"h-24 w-24",label:"text-lg"};default:return{circle:"h-20 w-20",label:"text-base"}}}const q=i.forwardRef((e,s)=>{const r=E(e),{label:n,children:t,size:l,className:c,orientation:f="horizontal",disabled:d,required:u,invalid:y,errorMessage:m,description:p}=e,R={},x=i.useId(),$=e.name||x;return a.jsxs("fieldset",{"aria-describedby":p?`${x}-description`:void 0,ref:s,className:b("text-left",c),children:[n&&a.jsx("legend",{className:r.label,...R,children:n}),a.jsx("div",{className:b("flex",n?"mt-6":"mt-0",f==="vertical"?"flex-col gap-10":"flex-row gap-16"),children:i.Children.map(t,o=>{if(i.isValidElement(o))return i.cloneElement(o,{name:$,size:l,invalid:o.props.invalid||y||void 0,disabled:o.props.disabled||d,required:o.props.required||u})})}),p&&!m&&a.jsx("div",{className:r.description,id:`${x}-description`,children:p}),m&&a.jsx("div",{className:r.error,children:m})]})});function A({children:e,...s}){const{fieldState:{error:r}}=g({name:s.name});return a.jsx(q,{errorMessage:r==null?void 0:r.message,...s,children:e})}function B(){const{trans:e}=v();return w({mutationFn:s=>P(s),onSuccess:(s,r)=>{j(r.delete?e(h("Subscription deleted.")):e(h("Subscription cancelled.")))},onError:s=>S(s)})}function P({subscriptionId:e,...s}){return N.post(`billing/subscriptions/${e}/cancel`,s).then(r=>r.data)}function H(){const{trans:e}=v();return w({mutationFn:s=>G(s),onSuccess:()=>{j(e(h("Subscription renewed.")))},onError:s=>S(s)})}function G({subscriptionId:e}){return N.post(`billing/subscriptions/${e}/resume`).then(s=>s.data)}export{A as F,q as R,T as a,H as b,z as c,B as u};
//# sourceMappingURL=use-resume-subscription-294bd46e.js.map

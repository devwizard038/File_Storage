import{r as c,f as o,j as r,T as l,c as i}from"./main-9e2d4150.js";const x=c.memo(({value:s,currency:e})=>{const a=o({style:"currency",currency:e,currencyDisplay:"narrowSymbol"});return isNaN(s)&&(s=0),r.jsx(c.Fragment,{children:a.format(s)})});function d({price:s,variant:e="slash",className:a,priceClassName:m,periodClassName:t}){if(!s)return null;const n=r.jsx(l,{message:s.interval});return r.jsxs("div",{className:i("flex gap-6 items-center",a),children:[r.jsx("div",{className:m,children:r.jsx(x,{value:s.amount/(s.interval_count??1),currency:s.currency})}),e==="slash"?r.jsxs("div",{className:t,children:[" / ",n]}):r.jsxs("div",{className:t,children:[r.jsx(l,{message:"per"})," ",r.jsx("br",{})," ",n]})]})}export{d as F,x as a};
//# sourceMappingURL=formatted-price-a3e40dbf.js.map
var R=Object.defineProperty;var F=Object.getOwnPropertySymbols;var B=Object.prototype.hasOwnProperty,b=Object.prototype.propertyIsEnumerable;var T=(e,t,r)=>t in e?R(e,t,{enumerable:!0,configurable:!0,writable:!0,value:r}):e[t]=r,l=(e,t)=>{for(var r in t||(t={}))B.call(t,r)&&T(e,r,t[r]);if(F)for(var r of F(t))b.call(t,r)&&T(e,r,t[r]);return e};import{au as S,ay as y,cl as p,ax as N,cm as h}from"./index-67a30bc6.js";const q="javascript:",o=e=>{if(typeof e=="string")if(e.startsWith(q)){const t=e.split(q)[1];let r;try{r=new Function(`${t}`)()}catch(m){console.log(m),window.$message.error("js\u5185\u5BB9\u89E3\u6790\u6709\u8BEF\uFF01")}return r}else return e;for(const t in e)if(Object.prototype.hasOwnProperty.call(e,t)){const r=e[t];e[t]=o(r)}return e},x=(e,t)=>{if(!e||!t)return;const{requestOriginUrl:r,requestParams:m}=t,{requestUrl:f,requestContentType:O,requestDataType:C,requestHttpType:w,requestParamsBodyType:D,requestSQLContent:E,requestParams:a}=e;if(C===S.STATIC||!f)return;let n=l(l({},m.Header),a.Header);n=o(n);let u={},d=l({},a.Params);d=o(d);let c=new FormData;switch(c.set("default","defaultData"),D){case y.NONE:break;case y.JSON:n["Content-Type"]=p.JSON,u=o(JSON.parse(a.Body.json));break;case y.XML:n["Content-Type"]=p.XML,u=o(a.Body.xml);break;case y.X_WWW_FORM_URLENCODED:{n["Content-Type"]=p.FORM_URLENCODED;const s=a.Body["x-www-form-urlencoded"];for(const i in s)c.set(i,o(s[i]));u=c;break}case y.FORM_DATA:{n["Content-Type"]=p.FORM_DATA;const s=a.Body["form-data"];for(const i in s)c.set(i,o(s[i]));u=c;break}}O===N.SQL&&(n["Content-Type"]=p.JSON,u=E);try{const s=new Function("return `"+`${r}${f}`.trim()+"`")();return h({url:s,method:w,data:u,params:d,headers:n})}catch(s){console.log(s),window.$message.error("URL\u5730\u5740\u683C\u5F0F\u6709\u8BEF\uFF01")}};export{x as c};
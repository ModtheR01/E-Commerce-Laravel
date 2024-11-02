import{_ as ie}from"./dialog.vue_vue_type_script_setup_true_lang-16687c15.js";import{_ as ue}from"./base-button.vue_vue_type_script_setup_true_lang-3d6cef8e.js";import{_ as de,a as ce}from"./input-label.vue_vue_type_script_setup_true_lang-b020cb97.js";import{_ as pe}from"./input-text.vue_vue_type_script_setup_true_lang-c368a274.js";import{_ as me}from"./icon-close-2c219153.js";import{_ as fe}from"./_plugin-vue_export-helper-c27b6911.js";import{r as R,s as f,v as ve,x as q,d as B,y as F,z as Z,u as p,A as J,B as S,C as be,D as K,F as P,o as V,h as G,f as b,T as ge,b as y,w as E,a as N,q as _e,c as ye,E as T,t as U,K as he,Z as xe}from"./app-8d2ddf0a.js";import{i as j,I as z,A as D,O as ke,o as A,f as we,E as Ee,u as Se,T as $e,a as O,P as M,N as C,b as H}from"./transition-fb8d0e84.js";import{k as Y,K as Oe}from"./dialog-6de4cc28.js";import"./use-input-size-a5ed2a71.js";function Re(e,l,a){let r=R(a==null?void 0:a.value),o=f(()=>e.value!==void 0);return[f(()=>o.value?e.value:r.value),function(u){return o.value||(r.value=u),l==null?void 0:l(u)}]}function Ne({container:e,accept:l,walk:a,enabled:r}){ve(()=>{let o=e.value;if(!o||r!==void 0&&!r.value)return;let u=j(e);if(!u)return;let c=Object.assign(d=>l(d),{acceptNode:l}),i=u.createTreeWalker(o,NodeFilter.SHOW_ELEMENT,c,!1);for(;i.nextNode();)a(i.currentNode)})}function Q(e={},l=null,a=[]){for(let[r,o]of Object.entries(e))ee(a,X(l,r),o);return a}function X(e,l){return e?e+"["+l+"]":l}function ee(e,l,a){if(Array.isArray(a))for(let[r,o]of a.entries())ee(e,X(l,r.toString()),o);else a instanceof Date?e.push([l,a.toISOString()]):typeof a=="boolean"?e.push([l,a?"1":"0"]):typeof a=="string"?e.push([l,a]):typeof a=="number"?e.push([l,`${a}`]):a==null?e.push([l,""]):Q(a,l,e)}function Te(e){var l,a;let r=(l=e==null?void 0:e.form)!=null?l:e.closest("form");if(r){for(let o of r.elements)if(o!==e&&(o.tagName==="INPUT"&&o.type==="submit"||o.tagName==="BUTTON"&&o.type==="submit"||o.nodeName==="INPUT"&&o.type==="image")){o.click();return}(a=r.requestSubmit)==null||a.call(r)}}let te=Symbol("LabelContext");function le(){let e=J(te,null);if(e===null){let l=new Error("You used a <Label /> component, but it is not inside a parent.");throw Error.captureStackTrace&&Error.captureStackTrace(l,le),l}return e}function ae({slot:e={},name:l="Label",props:a={}}={}){let r=R([]);function o(u){return r.value.push(u),()=>{let c=r.value.indexOf(u);c!==-1&&r.value.splice(c,1)}}return q(te,{register:o,slot:e,name:l,props:a}),f(()=>r.value.length>0?r.value.join(" "):void 0)}let Ce=B({name:"Label",props:{as:{type:[Object,String],default:"label"},passive:{type:[Boolean],default:!1},id:{type:String,default:null}},setup(e,{slots:l,attrs:a}){var r;let o=(r=e.id)!=null?r:`headlessui-label-${z()}`,u=le();return F(()=>Z(u.register(o))),()=>{let{name:c="Label",slot:i={},props:d={}}=u,{passive:x,...w}=e,v={...Object.entries(d).reduce(($,[_,h])=>Object.assign($,{[_]:p(h)}),{}),id:o};return x&&(delete v.onClick,delete v.htmlFor,delete w.onClick),D({ourProps:v,theirProps:w,slot:i,attrs:a,slots:l,name:c})}}});function Ve(e,l){return e===l}let re=Symbol("RadioGroupContext");function oe(e){let l=J(re,null);if(l===null){let a=new Error(`<${e} /> is missing a parent <RadioGroup /> component.`);throw Error.captureStackTrace&&Error.captureStackTrace(a,oe),a}return l}let je=B({name:"RadioGroup",emits:{"update:modelValue":e=>!0},props:{as:{type:[Object,String],default:"div"},disabled:{type:[Boolean],default:!1},by:{type:[String,Function],default:()=>Ve},modelValue:{type:[Object,String,Number,Boolean],default:void 0},defaultValue:{type:[Object,String,Number,Boolean],default:void 0},form:{type:String,optional:!0},name:{type:String,optional:!0},id:{type:String,default:null}},inheritAttrs:!1,setup(e,{emit:l,attrs:a,slots:r,expose:o}){var u;let c=(u=e.id)!=null?u:`headlessui-radiogroup-${z()}`,i=R(null),d=R([]),x=ae({name:"RadioGroupLabel"}),w=Y({name:"RadioGroupDescription"});o({el:i,$el:i});let[v,$]=Re(f(()=>e.modelValue),t=>l("update:modelValue",t),f(()=>e.defaultValue)),_={options:d,value:v,disabled:f(()=>e.disabled),firstOption:f(()=>d.value.find(t=>!t.propsRef.disabled)),containsCheckedOption:f(()=>d.value.some(t=>_.compare(S(t.propsRef.value),S(e.modelValue)))),compare(t,s){if(typeof e.by=="string"){let n=e.by;return(t==null?void 0:t[n])===(s==null?void 0:s[n])}return e.by(t,s)},change(t){var s;if(e.disabled||_.compare(S(v.value),S(t)))return!1;let n=(s=d.value.find(g=>_.compare(S(g.propsRef.value),S(t))))==null?void 0:s.propsRef;return n!=null&&n.disabled?!1:($(t),!0)},registerOption(t){d.value.push(t),d.value=ke(d.value,s=>s.element)},unregisterOption(t){let s=d.value.findIndex(n=>n.id===t);s!==-1&&d.value.splice(s,1)}};q(re,_),Ne({container:f(()=>A(i)),accept(t){return t.getAttribute("role")==="radio"?NodeFilter.FILTER_REJECT:t.hasAttribute("role")?NodeFilter.FILTER_SKIP:NodeFilter.FILTER_ACCEPT},walk(t){t.setAttribute("role","none")}});function h(t){if(!i.value||!i.value.contains(t.target))return;let s=d.value.filter(n=>n.propsRef.disabled===!1).map(n=>n.element);switch(t.key){case O.Enter:Te(t.currentTarget);break;case O.ArrowLeft:case O.ArrowUp:if(t.preventDefault(),t.stopPropagation(),M(s,C.Previous|C.WrapAround)===H.Success){let n=d.value.find(g=>{var m;return g.element===((m=j(i))==null?void 0:m.activeElement)});n&&_.change(n.propsRef.value)}break;case O.ArrowRight:case O.ArrowDown:if(t.preventDefault(),t.stopPropagation(),M(s,C.Next|C.WrapAround)===H.Success){let n=d.value.find(g=>{var m;return g.element===((m=j(g.element))==null?void 0:m.activeElement)});n&&_.change(n.propsRef.value)}break;case O.Space:{t.preventDefault(),t.stopPropagation();let n=d.value.find(g=>{var m;return g.element===((m=j(g.element))==null?void 0:m.activeElement)});n&&_.change(n.propsRef.value)}break}}let k=f(()=>{var t;return(t=A(i))==null?void 0:t.closest("form")});return F(()=>{be([k],()=>{if(!k.value||e.defaultValue===void 0)return;function t(){_.change(e.defaultValue)}return k.value.addEventListener("reset",t),()=>{var s;(s=k.value)==null||s.removeEventListener("reset",t)}},{immediate:!0})}),()=>{let{disabled:t,name:s,form:n,...g}=e,m={ref:i,id:c,role:"radiogroup","aria-labelledby":x.value,"aria-describedby":w.value,onKeydown:h};return K(P,[...s!=null&&v.value!=null?Q({[s]:v.value}).map(([I,L])=>K(we,Ee({features:Se.Hidden,key:I,as:"input",type:"hidden",hidden:!0,readOnly:!0,form:n,disabled:t,name:I,value:L}))):[],D({ourProps:m,theirProps:{...a,...$e(g,["modelValue","defaultValue","by"])},slot:{},attrs:a,slots:r,name:"RadioGroup"})])}}});var Ae=(e=>(e[e.Empty=1]="Empty",e[e.Active=2]="Active",e))(Ae||{});let Be=B({name:"RadioGroupOption",props:{as:{type:[Object,String],default:"div"},value:{type:[Object,String,Number,Boolean]},disabled:{type:Boolean,default:!1},id:{type:String,default:null}},setup(e,{attrs:l,slots:a,expose:r}){var o;let u=(o=e.id)!=null?o:`headlessui-radiogroup-option-${z()}`,c=oe("RadioGroupOption"),i=ae({name:"RadioGroupLabel"}),d=Y({name:"RadioGroupDescription"}),x=R(null),w=f(()=>({value:e.value,disabled:e.disabled})),v=R(1);r({el:x,$el:x});let $=f(()=>A(x));F(()=>c.registerOption({id:u,element:$,propsRef:w})),Z(()=>c.unregisterOption(u));let _=f(()=>{var m;return((m=c.firstOption.value)==null?void 0:m.id)===u}),h=f(()=>c.disabled.value||e.disabled),k=f(()=>c.compare(S(c.value.value),S(e.value))),t=f(()=>h.value?-1:k.value||!c.containsCheckedOption.value&&_.value?0:-1);function s(){var m;c.change(e.value)&&(v.value|=2,(m=A(x))==null||m.focus())}function n(){v.value|=2}function g(){v.value&=-3}return()=>{let{value:m,disabled:I,...L}=e,ne={checked:k.value,disabled:h.value,active:!!(v.value&2)},se={id:u,ref:x,role:"radio","aria-checked":k.value?"true":"false","aria-labelledby":i.value,"aria-describedby":d.value,"aria-disabled":h.value?!0:void 0,tabIndex:t.value,onClick:h.value?void 0:s,onFocus:h.value?void 0:n,onBlur:h.value?void 0:g};return D({ourProps:se,theirProps:L,slot:ne,attrs:l,slots:a,name:"RadioGroupOption"})}}}),W=Ce,Ie=Oe;const Le={},Pe={xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},Ge=b("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z"},null,-1),Fe=[Ge];function ze(e,l){return V(),G("svg",Pe,Fe)}const De=fe(Le,[["render",ze]]),Ke={class:"flex items-start justify-between gap-4 border-b px-6 py-4"},Ue={class:"flex size-12 shrink-0 items-center justify-center rounded-full border"},Me=b("div",{class:"w-full"},[b("h3",{class:"text-base font-semibold leading-6 text-gray-600"},"Invite Contributor by e-mail"),b("p",{class:"mt-1 text-sm text-gray-500"},"Invite a new contributor to your project.")],-1),He={class:"flex w-full flex-col space-y-6 p-6"},We={class:"w-full space-y-1"},qe={class:"w-full space-y-1"},Ze={class:"-space-y-px rounded-md bg-white"},Je=b("span",{class:"size-1.5 rounded-full bg-white"},null,-1),Ye=[Je],Qe={class:"ml-3 flex flex-col space-y-2"},Xe={class:"grid grid-cols-1 gap-6 border-t px-6 py-4 md:grid-cols-2"},dt=B({__name:"invite",props:{roles:{}},setup(e){const l=e,{close:a}=he(),r=ge({email:"",role:l.roles[1].value}),o=f(()=>r.email.length>0&&r.email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)),u=()=>{r.post(route("ltu.contributors.invite.store"),{preserveScroll:!0,onSuccess:()=>{a()}})};return(c,i)=>{const d=xe,x=De,w=me,v=de,$=pe,_=ce,h=ue,k=ie;return V(),G(P,null,[y(d,{title:"Invite Contributor by e-mail"}),y(k,{size:"lg"},{default:E(()=>[b("div",Ke,[b("div",Ue,[y(x,{class:"size-6 text-gray-400"})]),Me,b("div",{class:"flex w-8 cursor-pointer items-center justify-center text-gray-400 hover:text-gray-600",onClick:i[0]||(i[0]=(...t)=>p(a)&&p(a)(...t))},[y(w,{class:"size-5"})])]),b("div",He,[b("div",We,[y(v,{value:"E-mail address"}),y($,{modelValue:p(r).email,"onUpdate:modelValue":i[1]||(i[1]=t=>p(r).email=t),label:"E-mail",type:"email",placeholder:"E-mail address of the contributor",error:p(r).errors.email,disabled:p(r).processing},null,8,["modelValue","error","disabled"]),y(_,{message:p(r).errors.email},null,8,["message"])]),b("div",qe,[y(v,{value:"Select role"}),y(p(je),{modelValue:p(r).role,"onUpdate:modelValue":i[2]||(i[2]=t=>p(r).role=t)},{default:E(()=>[y(p(W),{class:"sr-only"},{default:E(()=>[N("Role")]),_:1}),b("div",Ze,[(V(!0),G(P,null,_e(c.roles,(t,s)=>(V(),ye(p(Be),{key:t.value,as:"template",value:t.value},{default:E(({checked:n,active:g})=>[b("div",{class:T(["relative flex cursor-pointer border p-4 focus:outline-none",[s===0?"rounded-t-md":"",s===c.roles.length-1?"rounded-b-md":"",n?"z-10 border-blue-200 bg-blue-50":"border-gray-200"]])},[b("div",{class:T(["mt-0.5 flex size-4 shrink-0 cursor-pointer items-center justify-center rounded-full border",[n?"border-transparent bg-blue-600":"border-gray-300 bg-white",g?"ring-2 ring-blue-600 ring-offset-2":""]]),"aria-hidden":"true"},Ye,2),b("div",Qe,[y(p(W),{as:"span",class:T(["block text-sm font-medium",[n?"text-blue-900":"text-gray-900"]])},{default:E(()=>[N(U(t.label),1)]),_:2},1032,["class"]),y(p(Ie),{as:"span",class:T(["block text-sm",[n?"text-blue-700":"text-gray-500"]])},{default:E(()=>[N(U(t.description),1)]),_:2},1032,["class"])])],2)]),_:2},1032,["value"]))),128))])]),_:1},8,["modelValue"])])]),b("div",Xe,[y(h,{variant:"secondary",type:"button",size:"lg",onClick:p(a)},{default:E(()=>[N(" Close ")]),_:1},8,["onClick"]),y(h,{variant:"primary",type:"button",size:"lg",disabled:!p(o)||p(r).processing,"is-loading":p(r).processing,onClick:u},{default:E(()=>[N(" Send Invitation ")]),_:1},8,["disabled","is-loading"])])]),_:1})],64)}}});export{dt as default};

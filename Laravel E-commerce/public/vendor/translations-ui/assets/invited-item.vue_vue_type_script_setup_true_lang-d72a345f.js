import{u as y,_ as b}from"./use-confirmation-dialog-1471177b.js";import{_ as D}from"./base-button.vue_vue_type_script_setup_true_lang-3d6cef8e.js";import{_ as C}from"./icon-trash-62f8df5f.js";import{d as k,n as B,o as _,h as m,f as t,t as o,p as j,u as s,b as n,w as l,a,O as z}from"./app-8d2ddf0a.js";const T={class:"w-full hover:bg-gray-100"},N={class:"flex h-14 w-full divide-x"},V={class:"grid w-full grid-cols-3 divide-x"},$={class:"col-span-3 flex w-full items-center justify-start px-4 sm:col-span-1"},A={class:"text-sm font-medium text-gray-500"},I={class:"hidden w-full items-center justify-start px-4 md:flex"},O={class:"truncate whitespace-nowrap text-sm font-medium text-gray-500"},E={class:"hidden w-full items-center justify-start px-4 md:flex"},S={class:"truncate whitespace-nowrap text-sm font-medium text-gray-500"},q={class:"grid w-16"},F={class:"flex flex-col p-6"},G=t("span",{class:"text-xl font-medium text-gray-700"},"Are you sure?",-1),H={class:"mt-2 text-sm text-gray-500"},J={class:"font-medium"},K={class:"mt-4 flex gap-4"},U=k({__name:"invited-item",props:{invitation:{}},setup(L){const{loading:p,showDialog:u,openDialog:c,performAction:f,closeDialog:v}=y(),h=async e=>{await f(()=>z.delete(route("ltu.contributors.invite.delete",e)))};return(e,i)=>{const g=C,d=D,x=b,w=B("tooltip");return _(),m("div",T,[t("div",N,[t("div",V,[t("div",$,[t("span",A,o(e.invitation.email),1)]),t("div",I,[t("div",O,o(e.invitation.role.label),1)]),t("div",E,[t("div",S,o(e.invitation.invited_at),1)])]),t("div",q,[j((_(),m("button",{type:"button",class:"group flex items-center justify-center px-3 hover:bg-red-50",onClick:i[0]||(i[0]=(...r)=>s(c)&&s(c)(...r))},[n(g,{class:"size-5 text-gray-400 group-hover:text-red-600"})])),[[w,"Delete"]])]),n(x,{size:"sm",show:s(u)},{default:l(()=>[t("div",F,[G,t("span",H,[a(" This action cannot be undone, This will permanently delete the "),t("span",J,o(e.invitation.email),1),a(" invitation. ")]),t("div",K,[n(d,{variant:"secondary",type:"button",size:"lg","full-width":"",onClick:s(v)},{default:l(()=>[a(" Cancel ")]),_:1},8,["onClick"]),n(d,{variant:"danger",type:"button",size:"lg","is-loading":s(p),"full-width":"",onClick:i[1]||(i[1]=r=>h(e.invitation.id))},{default:l(()=>[a(" Delete ")]),_:1},8,["is-loading"])])])]),_:1},8,["show"])])])}}});export{U as _};

"use strict";(self.webpackChunkapp=self.webpackChunkapp||[]).push([[362],{362:(m,c,r)=>{r.r(c),r.d(c,{BlogModule:()=>o});var u=r(895),s=r(322),e=r(256);class i{ngOnInit(){this.loadTable()}loadTable(){const d=new mdb.Datatable(document.getElementById("datatable2"),{columns:[{label:"Name",field:"name"},"Position","Office","Age","Start date","Salary"],rows:[["Tiger Nixon","System Architect","Edinburgh","61","2011/04/25","$320,800"],["Garrett Winters","Accountant","Tokyo","63","2011/07/25","$170,750"],["Ashton Cox","Junior Technical Author","San Francisco","66","2009/01/12","$86,000"],["Cedric Kelly","Senior Javascript Developer","Edinburgh","22","2012/03/29","$433,060"],["Airi Satou","Accountant","Tokyo","33","2008/11/28","$162,700"],["Brielle Williamson","Integration Specialist","New York","61","2012/12/02","$372,000"],["Herrod Chandler","Sales Assistant","San Francisco","59","2012/08/06","$137,500"],["Rhona Davidson","Integration Specialist","Tokyo","55","2010/10/14","$327,900"],["Colleen Hurst","Javascript Developer","San Francisco","39","2009/09/15","$205,500"],["Sonya Frost","Software Engineer","Edinburgh","23","2008/12/13","$103,600"],["Jena Gaines","Office Manager","London","30","2008/12/19","$90,560"],["Quinn Flynn","Support Lead","Edinburgh","22","2013/03/03","$342,000"],["Charde Marshall","Regional Director","San Francisco","36","2008/10/16","$470,600"],["Haley Kennedy","Senior Marketing Designer","London","43","2012/12/18","$313,500"]]},{bordered:!0,hover:!0});document.getElementById("datatable-search-input").addEventListener("input",l=>{d.search(l.target.value)}),document.querySelectorAll(".form-outline").forEach(l=>{new mdb.Input(l).update()})}}i.\u0275fac=function(n){return new(n||i)},i.\u0275cmp=e.Xpm({type:i,selectors:[["app-blog"]],decls:9,vars:0,consts:[[1,"container","py-3"],[1,"row","justify-content-center"],[1,"col-12","col-md-10"],[1,"wrapper"],[1,"form-outline","my-4"],["type","text","id","datatable-search-input",1,"form-control"],["for","datatable-search-input",1,"form-label"],["id","datatable2"]],template:function(n,d){1&n&&(e.TgZ(0,"div",0)(1,"div",1)(2,"div",2)(3,"div",3)(4,"div",4),e._UZ(5,"input",5),e.TgZ(6,"label",6),e._uU(7,"Search"),e.qZA()(),e._UZ(8,"div",7),e.qZA()()()())}});const p=[{path:"",component:i}];class t{}t.\u0275fac=function(n){return new(n||t)},t.\u0275mod=e.oAB({type:t}),t.\u0275inj=e.cJS({imports:[s.Bz.forChild(p),s.Bz]});class o{}o.\u0275fac=function(n){return new(n||o)},o.\u0275mod=e.oAB({type:o}),o.\u0275inj=e.cJS({imports:[u.ez,t]})}}]);
let cHTML = new CommonTemplate();
let util = new CommonUtil();
let CommonHTML = (function () {
  // regular variables and jquery variables here
  let headSel = {},
      sidebarMenuItemSel = {},
      pageWrapperSel = {},
      bodyElem = {},
      mainWrapperSel = {},
      confirmModalLogoutSel = {};

  let fnCommonElement = {},
      fnHeaderAndFooterElem = {},
      fnPageTitle = {},
      fnManipulateRecordElem = {};

  let adminUsernameSel = {},
      adminTableSel = {},
      carTableSel = {},
      priceColumnSel = {},
      mileageColumnSel = {};


  return {

    /**
     * All the elements required before an
     * event occurred must be in the init function.
     */
    init: function () {

      // initialize regular variables and jquery variables from the top
      headSel = $('head');
      sidebarMenuItemSel = $(".templatemo-sidebar-menu li");
      pageWrapperSel = $(".template-page-wrapper");
      mainWrapperSel = $("#main-wrapper");
      adminUsernameSel = $('#admin-username');
      adminTableSel = $('#admin-table');
      carTableSel = $('#vehicle-table');
      priceColumnSel = $("#vehicle-table > tbody > tr > td:nth-child(6)");
      mileageColumnSel = $("#vehicle-table > tbody > tr > td:nth-child(8)");

      bodyElem = $('body');
      confirmModalLogoutSel = {};
      fnCommonElement = null;
      fnHeaderAndFooterElem = null;
      fnPageTitle = null;
      fnManipulateRecordElem = null;


      // call the event driven functions here
      this.bindCarActionFn();
    },
    bindCarActionFn: function () {

      fnCommonElement = function () {                                            // contents
        mainWrapperSel.prepend(cHTML.navBarHeaderElem());                         // header
        pageWrapperSel.prepend(AdminPageTemplate.sideBar(adminUsernameSel.val()));     // sidebar
        pageWrapperSel.last().append(AdminPageTemplate.footer());                      // footer
        pageWrapperSel.append(cHTML.confirmModalLogout());                        // confirm logout
      };

      fnHeaderAndFooterElem = function () {                   // contents
        mainWrapperSel.prepend(cHTML.navBarHeaderElem());       // header
        mainWrapperSel.last().append(AdminPageTemplate.footer());    // footer
      };

      fnManipulateRecordElem = function () {
        pageWrapperSel.append(cHTML.confirmDeleteRecord());
        pageWrapperSel.append(cHTML.rowAffectedSuccessfully());
      };


      // console.log(util.getFilename());

      switch (util.getFilename()) {
        case util.pageName[0].name: // dashboard
          fnCommonElement();
          break;
        case util.pageName[1].name:
          fnCommonElement();
          fnManipulateRecordElem();
          break;
        case util.pageName[2].name:
          fnCommonElement();
          adminTableSel.DataTable({
            "pageLength": 5,
            "lengthChange": false,
            searching: false
          });
          fnManipulateRecordElem();
          break;
        case util.pageName[3].name:
          fnCommonElement();
          break;
        case util.pageName[4].name: // sign-in
          fnHeaderAndFooterElem();
          break;
        case util.pageName[5].name: // register
          fnHeaderAndFooterElem();
          break;
        default:
      }
    }
  }; // end return
})();
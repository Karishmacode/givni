$(document).ready(function ($) {
  $(document).on("submit", ".ajax-submit", function (e) {
    e.preventDefault();
    let formData      = new FormData(this);
    let _this         = $(this);
    let _url          = _this.data("url") || "php/submit.php";
    let _callback     = _this.data("callback") || "";
    let _reload       = _this.data("reload") || "url";
    let _alert        = _this.data("alert") || false;
    let _return       = _this.data("return");
    let _confirm      = _this.data("confirm");
    let _submitButton = _this.find('button[type = "submit"]');
    let _buttonHtml   = _submitButton.html();

    if (_confirm) {
      if (typeof Swal !== "undefined") {
        Swal.fire({
          title: _confirm,
          icon: "question",
          showCancelButton: true,
          confirmButtonText: "Yes, I'm usre!",
        }).then((result) => {
          if (result.isConfirmed) {
            ajax_submit();
          }
        });
      } else {
        if (confirm(_confirm)) {
          ajax_submit();
        }
      }
    } else {
      ajax_submit();
    }

    function ajax_submit() {
      $.ajax({
        type: "POST",
        url: _url,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function () {
          _submitButton.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ${_buttonHtml}`).prop("disabled", true);
        },
        success: function (result) {
          if (result == _return) {
            _submitButton.html(result);
            if (_alert) {
              if (typeof Swal !== "undefined") {
                Swal.fire('', result, 'success')
                .then(() => {
                  ajax_reload();
                });
              } else {
                alert(result)
                ajax_reload();
              }
            }else{
              ajax_reload();
            }
          } else {
            toast('Oops!', result , 'error');
            _submitButton.html(_buttonHtml).prop("disabled", false);
          }
        },
        error: function (error) {
          _submitButton.html(_buttonHtml).prop("disabled", false);
        },
      });
    }
    function ajax_reload(){
      if (_reload == "ajax") {
        try{
          if (_callback != "") {
            page_loader(_callback);
          } else {
            page_loader();
          }
        } catch{
          if (_callback != "") {
            window.location.href = _callback;
          } else {
            window.location.reload();
          }
        }
      } else if (_reload == "modal") {
        _this.parents(".modal").addClass("reload").modal("hide");
      } else if (_reload == "reload") {
        window.location.reload();
      } else if (_reload == "back") {
        window.history.back();
      } else if (_callback != "") {
        window.location.href = _callback;
      }
    }
    return false;
  });

  function toast(head='', message='', type='success') {
    if (typeof Swal !== "undefined") {
      Swal.fire(head, message, type);
    } else {
      alert(message);
    }
  }
});

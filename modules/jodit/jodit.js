wbapp.loadScripts = async function(scripts = [], trigger = null, func = null) {
  if (wbapp.loadedScripts == undefined) wbapp.loadedScripts = [];
  let i = 0;
  scripts.forEach(function(src) {
//    let name = src.split("/");
//    name = name[name.length-1];
    let name = src;
    if (wbapp.loadedScripts.indexOf(name) !== -1) {
      i++;
      if (i >= scripts.length) {
        if (func !== null) return func(scripts);
        if (trigger !== null) {
          $(document).find("script#" + trigger + "-remove").remove();
          $(document).trigger(trigger);
          console.log("Trigger: " + trigger);
        }
      }
    } else {
      var script = document.createElement('script');
      script.src = src;
      script.async = false;
      script.onload = function() {
        i++;
        console.log("Script loaded: " + name);
        wbapp.loadedScripts.push(name);
        if (i >= scripts.length) {
          if (func !== null) return func(scripts);
          if (trigger !== null) {
            $(document).find("script#" + trigger + "-remove").remove();
            console.log("Trigger: " + trigger);
            $(document).trigger(trigger);
          }
        }
      }
      document.head.appendChild(script);
    }
  });
}



  //$(document).on("wb-ajax-done",function(){$(document).trigger("jodit-js");});
  $('.jodit:not(.ready)').each(function() {
    $(this).addClass("ready");
    var editable = this;

      $(editable).data("timeout", false);
      var name = $(editable).attr("name");
      var id = $(editable).attr("id");
      if (id == undefined) {
        id = "jd-" + wbapp.newId();
        $(editable).attr("id", id);
      }
      //var lang = wbapp.settings.i18n;
      var lang = $(editable).attr("data-lang");
      if (lang == undefined) lang = wbapp.settings.locale;
      lang = lang.substr(0,2);
      var theme = $(editable).attr("data-theme");
      if (theme == undefined) theme = "gray";
      wb_include("/modules/jodit/build/jodit.min.css");


      var loadjs = ["/engine/js/php.js",
        "/modules/jodit/build/jodit.min.js",
        "/modules/jodit/caret/jquery.caret-1.5.2.min.js"
      ];
      //if (lang !== "en") loadjs.push("/engine/modules/jodit/lib/js/languages/" + lang + ".js");
      wbapp.loadScripts(loadjs, "jodit-init", function() {

        //lang = explode("-", lang);
        var options = {
          theme: theme,
          language: 'ru',
          beautyHTML: true,
          defaultActionOnPaste: "insert_clear_html",
          sourceEditorNativeOptions: {
            theme: "ace/theme/monokai",
            mode: "ace/mode/php",
            showGutter: true,
          },
          //language: lang[0],
          imageUploadURL: '/modules/uploader/uploader.php',
          //            pastePlain: true,
          //            documentReady: true,
          events: {
            'change': function(text) {
              $(editable).html(text);
              if ($(editable).data("timeout") == false) {
                $(editable).data("timeout", true);
                setTimeout(function() {
                  $(editable).trigger("change");
                  $(editable).data("timeout", false);
                }, 300);
              }
            }
          }
        }

        if ($(editable).hasClass("contenteditable")) {
          options.preset = "inline";
          options.toolbarInline = true;
          options.events = {
            'change': function(text) {
              $(editable).data("contenteditable", text);
            }
          };
        }
        console.log(id);
        var edit = new Jodit('#' + id, options);

      });
  });

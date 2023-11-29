tinymce.init({
    selector: ".kt_docs_tinymce_hidden", height : "480",
    menubar: false,
    toolbar: ["styleselect fontselect fontsizeselect",
        "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
        "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
    plugins : "advlist autolink link image lists charmap print preview code"
});
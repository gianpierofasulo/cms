<script src="{{ asset('public/backend/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('public/backend/js/custom.js') }}"></script>

<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>

<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

@if(session()->get('error'))
    <script>
        toastr.error('{{ session()->get('error') }}');
    </script>
@endif

@if(session()->get('success'))
    <script>
        toastr.success('{{ session()->get('success') }}');
    </script>
@endif


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  var codeBlocks = document.querySelectorAll("pre code");
  for (var i = 0; i < codeBlocks.length; i++) {
    var codeBlock = codeBlocks[i];
    var codeContent = codeBlock.innerHTML;

    codeContent = codeContent.replace(/&amp;lt;/g, "&lt;").replace(/&amp;gt;/g, "&gt;");
    codeBlock.innerHTML = codeContent;

    highlightSyntax(codeBlock);

    addCopyToClipboardButton(codeBlock);
  }
});

function highlightSyntax(codeBlock) {
  var codeContent = codeBlock.textContent;

  var htmlCode = Prism.highlight(codeContent, Prism.languages.javascript, "javascript");

  codeBlock.innerHTML = htmlCode;
}

function addCopyToClipboardButton(codeBlock) {
  var button = document.createElement("button");
  button.classList.add("copy-button");
  button.innerHTML = "Copy";

  button.addEventListener("click", function() {
    copyToClipboard(codeBlock);
  });

  codeBlock.parentElement.insertBefore(button, codeBlock);
}

  function copyToClipboard(codeBlock) {
  var codeContent = codeBlock.textContent;

  var textarea = document.createElement("textarea");
  textarea.value = codeContent;
  document.body.appendChild(textarea);

  try {
    textarea.select();
    var successful = document.execCommand("copy");
    var message = successful ? "Copied to clipboard!" : "Unable to copy to clipboard.";
    console.log(message);
    showNotification(message);
    if (successful) {
      replaceCopyButton(codeBlock);
    }
  } catch (err) {
    console.log("Unable to copy to clipboard.");
  }

  document.body.removeChild(textarea);
}

function showNotification(message) {
  var notification = document.createElement("div");
  notification.classList.add("notification");
  notification.textContent = message;

  document.body.appendChild(notification);

  setTimeout(function() {
    document.body.removeChild(notification);
  }, 2000);
}

function replaceCopyButton(codeBlock) {
  var copyButton = codeBlock.closest(".code-block").querySelector(".copy-button");
  copyButton.textContent = "Copied!";
}

</script>
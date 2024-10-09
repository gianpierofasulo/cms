<script src="{{ asset('public/frontend/js/custom.js') }}"></script>

@if($g_setting->sticky_header_status == 'Show')
<script>
    //StickyHeader
    function stickyHeader()
    {
        var stickyScrollPos = $('#stickymenu').next().offset().top;
        if ($('#stickymenu').length)
        {
            if ($(window).scrollTop() > stickyScrollPos)
            {
                $('#stickymenu').addClass('sticky');
            }
            else if ($(window).scrollTop() <= stickyScrollPos)
            {
                $('#stickymenu').removeClass('sticky');
            }
        };
    }
    $(window).on('scroll', function () {
        stickyHeader();
    });
</script>
@endif

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

@if ($errors->any())
    @php $err = '';  @endphp
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


@if($g_setting->tawk_live_chat_status == 'Show')
<!--Start of Tawk.to Script-->
{!! $g_setting->tawk_live_chat_code !!}
<!--End of Tawk.to Script-->
@endif

<script type="text/javascript">
    $(document).ready(function() {
        $('.counter').each(function () {
            $(this).prop('Counter',0).animate({
            Counter: $(this).text()
            }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
});  
</script>

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
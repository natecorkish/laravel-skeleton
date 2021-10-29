<div x-data="app()"
    x-init="init($refs.wysiwyg)"
    class="border border-secondary overflow-hidden rounded-md"
>
    <div class="w-full flex justify-between items-center border-b border-secondary text-xl text-primary h-10">
        <div class="flex">
            <span x-show="!raw" class="cursor-pointer text-sm font-bold flex items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('bold')">
                b
            </span>
            <span x-show="!raw" class="cursor-pointer text-sm font-bold flex items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('italic')">
                <i>i</i>
            </span>
            <span x-show="!raw" class="cursor-pointer text-sm font-bold flex items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('underline')">
                <u>u</u>
            </span>
            <span x-show="!raw" class="hidden md:flex cursor-pointer text-sm font-bold items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('formatBlock','P')">
                p
            </span>
            <span x-show="!raw" class="hidden md:flex cursor-pointer text-sm font-bold items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('formatBlock','H1')">
                h1
            </span>
            <span x-show="!raw" class="hidden md:flex cursor-pointer text-sm font-bold items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('formatBlock','H2')">
                h2
            </span>
            <span x-show="!raw" class="hidden md:flex cursor-pointer text-sm font-bold items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('formatBlock','H3')">
                h3
            </span>
            <span x-show="!raw" class="cursor-pointer text-sm font-bold leading-tight flex items-center justify-center outline-none border-r border-secondary w-10 h-10 hover:text-ternary active:bg-ternary" @click="format('insertUnorderedList')">
                <svg viewBox="0 0 24 24" class="h-5 w-5" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                    <line x1="8" y1="6" x2="21" y2="6"></line>
                    <line x1="8" y1="12" x2="21" y2="12"></line>
                    <line x1="8" y1="18" x2="21" y2="18"></line>
                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                </svg>
            </span>
        </div>
        <div class="pr-3" @click="rawCode()">
            <span class="text-sm font-bold cursor-pointer" x-show="raw">
                {{ __('Show Formatted') }}
            </span>
            <span class="text-sm font-bold cursor-pointer" x-show="!raw">
                {{ __('Show Raw') }}
            </span>
        </div>
    </div>

    <div class="w-full">
        <input name="{{ $name }}" id="value-{{ $name }}" type="hidden" value="{{ $value }}">
        <iframe x-ref="wysiwyg" id="wysiwyg" class="w-full h-96 overflow-y-auto"></iframe>
    </div>
</div>

<script>
    function app() {
        return {
            raw: false,
            wysiwyg: null,
            init: function(el) {
                // Get el
                this.wysiwyg = el;

                // add the default value
                this.wysiwyg.contentDocument.querySelector('body').innerHTML = `{!! $value !!}`

                // css
                this.wysiwyg.contentDocument.querySelector('head').innerHTML += `<style>
                    *, ::after, ::before {box-sizing: border-box;}
                    :root {tab-size: 4;}
                    html {line-height: 1.15;text-size-adjust: 100%;}
                    body {margin: 0px; padding: 1rem 0.5rem;}
                    body {font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";}
                </style>`;

                // Make editable
                this.wysiwyg.contentDocument.designMode = "on";
            },
            format: function(cmd, param) {
                this.wysiwyg.contentDocument.execCommand(cmd, !1, param||null)
            },
            rawCode: function() {
                let code = document.getElementById('value-{{ $name }}').value;
                let body = document.getElementById('wysiwyg').contentWindow.document.body;

                if(this.raw) {
                    body.innerHTML = code
                } else {
                    body.innerText = code
                }

                this.raw = !this.raw;
            }
        }
    }

    document.getElementById('wysiwyg').contentWindow.document.body.addEventListener('DOMCharacterDataModified', function (event) {
        let code = null;
        if(this.raw) {
            code = document.getElementById('wysiwyg').contentWindow.document.body.innerHTML
        } else {
            code = document.getElementById('wysiwyg').contentWindow.document.body.innerText
        }
        document.getElementById('value-{{ $name }}').value = code
    }, false);

</script>

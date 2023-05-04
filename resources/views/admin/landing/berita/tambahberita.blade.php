@extends('admin.default')

@section('css')
<link rel="stylesheet" href="../css/dashboard/index.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

@endsection

@section('sidebar')
<div id="sidebar">
    <ul>
        <li >
            <a href="/admin">
              <iconify-icon class="box-icon" icon="radix-icons:dashboard" width="18" height="18"></iconify-icon>
              <p class="sec">Dashboard</p>
            </a>
        </li>
        <li >
            <a href="/dataguru">
              <iconify-icon class="box-icon" icon="uil:users-alt" width="18" height="18"></iconify-icon>
                <p class="sec">Data Guru</p>
            </a>
        </li>
        <li >
            <a href="/landing">
              <iconify-icon class="box-icon active" icon="quill:paper" width="18" height="18"></iconify-icon>
                <p class="sec active">Landing Page</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('content')
<div id="content">
    <div style=" display: flex; align-items: center; margin-bottom: 1%;">
      <iconify-icon class="box-icon active" style="color: white;" icon="quill:paper" width="25" height="23"></iconify-icon>
        <p class="title-table">Landing page</p>
        <span class="panah"> >  </span> 
        <span class="title-table">tambah record</span>
        <span class="panah"> >  </span> 
        <span class="title-table">berita</span>
    </div>
    <span class="text-child">Pastikan isi form dengan benar dan lengkap !</span>
    <form action="/tambahberita/store" method="POST" enctype="multipart/form-data" autocomplete="off">
      @csrf
      <div id="content-berita">
        <div style="display: flex;">
            <div class="left-side">
                <div class="rec-input">
                    <label class="form-label">Judul Berita</label>
                    <input type="text" id="judul" name="judul" class="inputan">
                </div>
            </div>
            <div style="width: 0.1rem; height: 9.2vw; background-color: #D9D9D9;"></div>
            <div class="right-side">
                <div class="rec-input">
                    <label class="form-label">Gambar Berita</label>
                    <input type="file" name="gambar" id="gambar">
                </div>
            </div>
        </div>
        
        <div style="padding: 10px 30px 0px 30px;">
            <div id="container">
                <textarea name="isiberita" id="isiberita">
                </textarea>
            </div>
        </div>
        <div class="btn-landingpage">
            
          <a href="/landing/berita">
            <button class="btn-form">
                Cancel
                <iconify-icon icon="ph:x-circle-bold" style="color: white; margin-left: 5%;"></iconify-icon>
            </button>
          </a>

          <a href="/tambahberita/store">
            <button class="btn-form">
                Submit
                <iconify-icon icon="ph:x-circle-bold" style="color: white; margin-left: 5%;"></iconify-icon>
            </button>
          </a>

        </div>
    </form>
</div>
</div>
@endsection

@section('script')
    {{-- CKEDITOR --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/super-build/ckeditor.js"></script>
    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("isiberita"), {
            toolbar: {
                items: [
                    'exportPDF','exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight',
                    'alignment',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
                    'specialCharacters', 'horizontalLine','|',
                     '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },


{ model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: 'Welcome to CKEditor 5!',
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                supportAllValues: true
            },
            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
            htmlSupport: {
                allow: [
                    {
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }
                ]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [
                    {
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }
                ]
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',


'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType',
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents'
            ]
        });
    </script>
    {{-- END CK EDITOR --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
        function formatDoc(cmd, value=null) {
            if(value) {
                document.execCommand(cmd, false, value);
            } else {
                document.execCommand(cmd);
            }
        }
        
        function addLink() {
            const url = prompt('Insert url');
            formatDoc('createLink', url);
        }
        
        const content = document.getElementById('content');
        
        content.addEventListener('mouseenter', function () {
            const a = content.querySelectorAll('a');
            a.forEach(item=> {
                item.addEventListener('mouseenter', function () {
                    content.setAttribute('contenteditable', false);
                    item.target = '_blank';
                })
                item.addEventListener('mouseleave', function () {
                    content.setAttribute('contenteditable', true);
                })
            })
        })
        
        
        const showCode = document.getElementById('show-code');
        let active = false;
        
        showCode.addEventListener('click', function () {
            showCode.dataset.active = !active;
            active = !active
            if(active) {
                content.textContent = content.innerHTML;
                content.setAttribute('contenteditable', false);
            } else {
                content.innerHTML = content.textContent;
                content.setAttribute('contenteditable', true);
            }
        })
        
        
        
        const filename = document.getElementById('filename');
        
        function fileHandle(value) {
            if(value === 'new') {
                content.innerHTML = '';
                filename.value = 'untitled';
            } else if(value === 'txt') {
                const blob = new Blob([content.innerText])
                const url = URL.createObjectURL(blob)
                const link = document.createElement('a');
                link.href = url;
                link.download = `${filename.value}.txt`;
                link.click();
            } else if(value === 'pdf') {
                html2pdf(content).save(filename.value);
            }
        }
    </script>
    <!-- drag and drop -->
    <script>
      const dragText = document.querySelector(".text-drop"),
      form = document.querySelector(".draganddrop"),
      dragText2 = document.querySelector(".text-drop2"),
      btnDrag = document.getElementById("btn-line");

      form.addEventListener("dragover", (event) => {
          dragText.textContent = 'drop here';
          form.classList.add('active');
      });

      form.addEventListener("dragleave", (event) => {
          dragText.textContent = 'Drop and Drag your image here';
          form.classList.remove('active');
      });

      form.addEventListener("drop", (event) => {
          dragText.textContent = 'nama image nya (image.png)';
          form.classList.remove('active');
          dragText2.style.display = "none";
          btnDrag.style.display = "flex";
      });
  </script>
  <!-- end drag and drop -->
@endsection
   
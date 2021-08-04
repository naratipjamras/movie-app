<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(config('app.name')); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* html, body {
             background-color: #fff;
             color: #636b6f;
             font-family: 'Nunito', sans-serif;
             font-weight: 200;
             height: 100vh;
             margin: 0;
         }

         .full-height {
             height: 100vh;
         }

         .flex-center {
             align-items: center;
             display: flex;
             justify-content: center;
         }

         .position-ref {
             position: relative;
         }*/

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        /*.content {
            text-align: center;
        }

        .title {
            font-size: 54px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }*/

        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}
        main{display:block}
        a{background-color:transparent}
        strong{font-weight:bolder}
        img{border-style:none}
        button,input{font-family:inherit;font-size:100%;line-height:1.15;margin:0;overflow:visible}
        button{text-transform:none}[type=button],[type=reset],[type=submit],
                                   button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,
                                                                    [type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,
                                                                                                                                                         [type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}
        [type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,
                                                                     [type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;
                                                                                                                              outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::
                                                                                                                                                                                                                   -webkit-file-upload-button{-webkit-appearance:button;font:inherit}[hidden],template{display:none}
        h2,h4,p{margin:0}button{background-color:transparent;background-image:none;padding:0}
        button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}
        ul{list-style:none;margin:0;padding:0}
        html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}
        *,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}
        img{border-style:solid}input::-webkit-input-placeholder{color:#a0aec0}
        input::-moz-placeholder{color:#a0aec0}
        input:-ms-input-placeholder{color:#a0aec0}
        input::-ms-input-placeholder{color:#a0aec0}
        input::placeholder{color:#a0aec0}[role=button],
                                         button{cursor:pointer}
        h2,h4{font-size:inherit;font-weight:inherit}
        a{color:inherit;text-decoration:inherit}
        button,input{padding:0;line-height:inherit;color:inherit}
        iframe,img,svg{display:block;vertical-align:middle}
        img{max-width:100%;height:auto}.container{width:100%}
        @media (min-width:640px){.container{max-width:640px}}
        @media (min-width:768px){.container{max-width:768px}}
        @media (min-width:1024px){.container{max-width:1024px}}
        @media (min-width:1280px){.container{max-width:1280px}}
        .bg-gray-800{background-color:#2d3748}
        .bg-gray-900{background-color:#1a202c}
        .bg-orange-500{background-color:#ed8936}
        .bg-blue-500{background-color:#4299e1}
        .hover\:bg-gray-700:hover{background-color:#4a5568}
        .hover\:bg-orange-600:hover{background-color:#dd6b20}
        .border-gray-700{border-color:#4a5568}
        .border-gray-800{border-color:#2d3748}
        .rounded{border-radius:.25rem}
        .rounded-lg{border-radius:.5rem}
        .rounded-full{border-radius:9999px}
        .border{border-width:1px}
        .border-t{border-top-width:1px}
        .border-b{border-bottom-width:1px}
        .block{display:block}.flex{display:flex}
        .inline-flex{display:inline-flex}.grid{display:grid}
        .hidden{display:none}
        .flex-col{flex-direction:column}
        .flex-wrap{flex-wrap:wrap}.items-center{align-items:center}
        .justify-end{justify-content:flex-end}
        .justify-center{justify-content:center}
        .justify-between{justify-content:space-between}
        .flex-none{flex:none}
        .font-sans{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji}
        .font-semibold{font-weight:600}
        .h-8{height:2rem}
        .h-full{height:100%}
        .leading-none{line-height:1}
        .leading-normal{line-height:1.5}
        .leading-loose{line-height:2}
        .list-disc{list-style-type:disc}
        .mx-2{margin-left:.5rem;margin-right:.5rem}
        .my-8{margin-top:2rem;margin-bottom:2rem}
        .mx-auto{margin-left:auto;margin-right:auto}
        .mt-1{margin-top:.25rem}.ml-1{margin-left:.25rem}
        .mt-2{margin-top:.5rem}.ml-2{margin-left:.5rem}
        .mt-3{margin-top:.75rem}.mt-4{margin-top:1rem}
        .mr-4{margin-right:1rem}.ml-4{margin-left:1rem}
        .ml-6{margin-left:1.5rem}.mt-8{margin-top:2rem}
        .mr-8{margin-right:2rem}.mt-12{margin-top:3rem}
        .mt-16{margin-top:4rem}.hover\:opacity-75:hover{opacity:.75}
        .focus\:outline-none:focus{outline:0}.overflow-hidden{overflow:hidden}
        .overflow-y-auto{overflow-y:auto}
        .py-1{padding-top:.25rem;padding-bottom:.25rem}
        .py-3{padding-top:.75rem;padding-bottom:.75rem}
        .px-3{padding-left:.75rem;padding-right:.75rem}
        .py-4{padding-top:1rem;padding-bottom:1rem}
        .px-4{padding-left:1rem;padding-right:1rem}
        .px-5{padding-left:1.25rem;padding-right:1.25rem}
        .py-6{padding-top:1.5rem;padding-bottom:1.5rem}
        .py-8{padding-top:2rem;padding-bottom:2rem}
        .px-8{padding-left:2rem;padding-right:2rem}
        .py-16{padding-top:4rem;padding-bottom:4rem}
        .py-24{padding-top:6rem;padding-bottom:6rem}
        .pt-2{padding-top:.5rem}.pr-4{padding-right:1rem}
        .pl-5{padding-left:1.25rem}.pl-8{padding-left:2rem}
        .pt-16{padding-top:4rem}.fixed{position:fixed}
        .absolute{position:absolute}.relative{position:relative}
        .top-0{top:0}.right-0{right:0}
        .left-0{left:0}
        .shadow-lg{box-shadow:0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -2px rgba(0,0,0,.05)}
        .focus\:shadow-outline:focus{box-shadow:0 0 0 3px rgba(66,153,225,.5)}
        .fill-current{fill:currentColor}.text-white{color:#fff}
        .text-gray-300{color:#e2e8f0}.text-gray-400{color:#cbd5e0}
        .text-gray-500{color:#a0aec0}.text-gray-900{color:#1a202c}
        .text-orange-500{color:#ed8936}
        .hover\:text-white:hover{color:#fff}.hover\:text-gray-300:hover{color:#e2e8f0}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}
        .text-3xl{font-size:1.875rem}.text-4xl{font-size:2.25rem}
        .uppercase{text-transform:uppercase}
        .hover\:underline:hover,.underline{text-decoration:underline}
        .tracking-wider{letter-spacing:.05em}.truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
        .w-4{width:1rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-32{width:8rem}
        .w-64{width:16rem}.w-full{width:100%}.z-50{z-index:50}.gap-8{grid-gap:2rem;gap:2rem}
        .grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}
        .transition{transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform}
        .ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}
        .duration-150{transition-duration:.15s}
        .spinner{position:relative;color:transparent!important;pointer-events:none}
        .spinner:after{content:"";position:absolute!important;top:calc(50% - .5em);left:calc(50% - .5em);
            display:block;width:1em;height:1em;border-radius:9999px;
            border-color:transparent transparent #dae1e7 #dae1e7;border-style:solid;
            border-width:2px;-webkit-animation:spinAround .5s linear infinite;
            animation:spinAround .5s linear infinite}
        @-webkit-keyframes spinAround{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}
        @keyframes  spinAround{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}.spinner{position:absolute}
        @media (min-width:640px){.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}
        @media (min-width:768px){.md\:flex-row{flex-direction:row}.md\:mt-0{margin-top:0}
            .md\:ml-4{margin-left:1rem}.md\:ml-6{margin-left:1.5rem}.md\:ml-16{margin-left:4rem}
            .md\:ml-24{margin-left:6rem}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}}
        @media (min-width:1024px){.lg\:px-32{padding-left:8rem;padding-right:8rem}.lg\:w-96{width:24rem}
            .lg\:grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}}
    </style>



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>


<body class="font-sans bg-gray-900 text-white">




    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="<?php echo e($data->image); ?>" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold"><?php echo e($data->name); ?></h2>





                <div x-data="{ isOpen1: false }">
                        <div class="mt-12">
                            <button
                                @click="isOpen1 = true"
                                class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150"
                            >
                                <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                        <template x-if="isOpen1">
                            <div
                                style="background-color: rgba(0, 0, 0, .5);"
                                class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                            >
                                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                    <div class="bg-gray-900 rounded">
                                        <div class="flex justify-end pr-4 pt-2">
                                            <button
                                                @click="isOpen1 = false"
                                                @keydown.escape.window="isOpen1 = false"
                                                class="text-3xl leading-none hover:text-gray-300">&times;
                                            </button>
                                        </div>
                                        <div class="modal-body px-8 py-8">
                                            <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                                <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                        src="https://www.youtube.com/embed/<?php echo e($data->youtube); ?>"
                                                        style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                </div>



                <div x-data="{ isOpen2: false }">
                    <div class="mt-12">
                        <button
                            @click="isOpen2 = true"
                            class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150"
                        >
                            <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2">Play Movie</span>
                        </button>
                    </div>
                    <template x-if="isOpen2">
                        <div
                            style="background-color: rgba(0, 0, 0, .5);"
                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                        >
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-gray-900 rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button
                                            @click="isOpen2 = false"
                                            @keydown.escape.window="isOpen2 = false"
                                            class="text-3xl leading-none hover:text-gray-300">&times;
                                        </button>
                                    </div>
                                    <div class="modal-body px-8 py-8">
                                        <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                            <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                    src="<?php echo e($data->link); ?>"
                                                    style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>



            </div>
        </div>
    </div> <!-- end movie-info -->



</body>
</html>
<?php /**PATH D:\Github\laravel-vue-crud-starter-master\resources\views/showmovie.blade.php ENDPATH**/ ?>
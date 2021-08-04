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
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <svg class="w-32" viewBox="0 0 96 24" fill="none"><path d="M18 4l2 4h-3l-2-4h-2l2 4h-3l-2-4H8l2 4H7L5 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4h-4zM35.568 7.047l2.557 7.219 2.543-7.22h2.693V17h-2.057v-2.72l.205-4.697L38.822 17h-1.408l-2.68-7.41.206 4.69V17h-2.051V7.047h2.68zm9.147 6.186c0-.733.141-1.387.424-1.962a3.108 3.108 0 011.216-1.333c.534-.314 1.151-.471 1.853-.471.998 0 1.812.305 2.44.916.634.61.987 1.44 1.06 2.488l.014.506c0 1.135-.317 2.046-.95 2.734-.634.684-1.484 1.026-2.55 1.026-1.067 0-1.919-.342-2.557-1.026-.633-.683-.95-1.613-.95-2.789v-.089zm1.975.144c0 .702.133 1.24.397 1.613.264.37.642.554 1.135.554.478 0 .852-.182 1.12-.547.27-.37.404-.957.404-1.764 0-.688-.134-1.221-.403-1.6-.27-.377-.647-.567-1.135-.567-.483 0-.857.19-1.121.568-.264.373-.397.954-.397 1.743zm8.908 1.21l1.374-4.983h2.064L56.541 17h-1.887L52.16 9.604h2.065l1.374 4.983zM61.996 17h-1.982V9.604h1.982V17zm-2.099-9.31c0-.297.098-.54.294-.732.2-.191.472-.287.814-.287.337 0 .606.096.806.287.201.191.301.435.301.731 0 .301-.102.547-.307.739-.2.191-.467.287-.8.287s-.602-.096-.807-.287a.975.975 0 01-.3-.739zm7.137 9.447c-1.085 0-1.969-.333-2.652-.998-.68-.666-1.019-1.552-1.019-2.66v-.19c0-.744.144-1.407.43-1.99a3.143 3.143 0 011.218-1.354c.528-.319 1.13-.478 1.804-.478 1.012 0 1.807.319 2.386.957.584.638.875 1.543.875 2.714v.806h-4.71c.064.483.255.87.574 1.162.324.292.732.438 1.224.438.761 0 1.356-.276 1.784-.827l.97 1.087a2.99 2.99 0 01-1.202.984 3.98 3.98 0 01-1.682.349zm-.225-6.07c-.392 0-.711.132-.957.396-.242.264-.397.643-.465 1.135h2.748v-.158c-.01-.437-.128-.774-.356-1.011-.228-.242-.551-.363-.97-.363zm10.144 3.882h-3.596L72.674 17h-2.18l3.704-9.953h1.9L79.825 17h-2.18l-.69-2.05zm-3.042-1.66H76.4l-1.25-3.726-1.238 3.725zm13.043.081c0 1.14-.26 2.053-.78 2.741-.514.684-1.211 1.026-2.091 1.026-.747 0-1.351-.26-1.811-.78v3.487h-1.976V9.604h1.832l.068.724c.479-.574 1.103-.861 1.873-.861.912 0 1.62.337 2.126 1.011.506.675.76 1.605.76 2.79v.102zm-1.975-.143c0-.689-.123-1.22-.37-1.593-.241-.374-.594-.56-1.06-.56-.619 0-1.045.236-1.278.71v3.028c.242.488.673.732 1.293.732.943 0 1.415-.773 1.415-2.317zm9.864.143c0 1.14-.26 2.053-.78 2.741-.514.684-1.212 1.026-2.091 1.026-.748 0-1.352-.26-1.812-.78v3.487h-1.975V9.604h1.832l.068.724c.479-.574 1.103-.861 1.873-.861.912 0 1.62.337 2.126 1.011.506.675.759 1.605.759 2.79v.102zm-1.976-.143c0-.689-.123-1.22-.369-1.593-.242-.374-.595-.56-1.06-.56-.62 0-1.045.236-1.278.71v3.028c.242.488.672.732 1.292.732.944 0 1.415-.773 1.415-2.317z" fill="#fff"/></svg>
                    </a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">






            </div>
        </div>
    </nav>









    <nav class="border-b border-gray-800">



        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>



                <div class="container mx-auto px-4 pt-16">
                    <div class="popular-movies">
                        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">













                        <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mt-8">
                            <a href="<?php echo e(url('movie/'.$item->id)); ?>">
                                <img
                                    src="<?php echo e($item->image); ?>"
                                    style="width: 224px;height: 332px;"
                                    alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300"><?php echo e($item->name); ?></a>













                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
                </div>
                </div>




            </div>
        </div>



    </nav>
    </body>
</html>
<?php /**PATH D:\Github\laravel-vue-crud-starter-master\resources\views/welcome.blade.php ENDPATH**/ ?>
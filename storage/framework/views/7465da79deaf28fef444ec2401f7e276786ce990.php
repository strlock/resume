<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(__('resume.myname')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" type="text/css" />
        <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="https://kit.fontawesome.com/8748648954.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="main-container" id="container">
            <ul id="languages"><li><a href="/ua">UA</a></li>|<li><a href="/en">EN</a></li></ul>
            <div id="top">
                <div class="button-container">
                    <a href="<?php echo e(asset('/pdf/Ivan Davydenko.pdf')); ?>" class="button-1"><i class="fa-solid fa-download"></i></a>
                </div>
                <div id="top-left">
                    <div id="avatar">
                        <img src="<?php echo e(asset('/images/me.jpg')); ?>" alt="" />
                    </div>
                    <div class="job-titles">
                        <h1><?php echo e(__('resume.myname')); ?></h1>
                        <h2><?php echo e(__('resume.position')); ?></h2>
                        <h6><?php echo e(__('resume.work')); ?></h6>
                    </div>
                    <div class="job-description"><?php echo e(__('resume.description')); ?></div>
                </div>
                <div id="top-right">
                    <ul id="contacts">
                        <li><span><i class="fa-solid fa-phone"></i></span> <a href="tel:+380997363205">+380997363205</a></li>
                        <li><span><i class="fa-brands fa-viber"></i></span> <a href="viber://add?number=+380997363205">+380997363205</a></li>
                        <li><span><i class="fa-brands fa-telegram"></i></span> <a href="https://t.me/+380997363205">+380997363205</a></li>
                        <li><span><i class="fa-brands fa-skype"></i></span> <a href="skype:strlock?call">strlock</a></li>
                        <li><span><i class="fa-brands fa-facebook"></i></span> <a href="https://www.facebook.com/i1.strlock" target="blank">i1.strlock</a></li>
                        <li><span><i class="fa-solid fa-envelope"></i></span> <a href="mailto:strlock@gmail.com">strlock@gmail.com</a></li>
                        <li><span><i class="fa-brands fa-linkedin"></i></span> <a href="https://www.linkedin.com/in/ivan-davydenko-121844237/" target="blank">LinkedIn</a></li>
                        <li><span><i class="fa-brands fa-github"></i></span> <a href="https://github.com/strlock/" target="blank">strlock</a></li>
                    </ul>
                </div>
            </div>
            <div id="middle">
                <div id="middle-left">
                    <div class="block education-block">
                        <div class="block-inner">
                            <h3><?php echo e(__('resume.education')); ?></h3>
                            <div class="date">2006-2010</div>
                            <h4><?php echo e(__('resume.educationDegree')); ?></h4>
                            <h5><?php echo e(__('resume.educationPlace')); ?></h5>
                            <div class="block-description"><?php echo e(__('resume.educationDescription')); ?></div>
                        </div>
                    </div>
                    
                    
                    <div class="block experience-block">
                        <div class="block-inner">
                            <h3><?php echo e(__('resume.experience')); ?></h3>
                            <div class="date">2011-2022</div>
                            <h4><?php echo e(__('resume.experienceName2')); ?></h4>
                            <h5><?php echo e(__('resume.experienceCompany2')); ?></h5>
                            <div class="block-description"><?php echo __('resume.experienceDescription2'); ?></div>
                        </div>
                    </div>
                    <div class="block portfolio-block d-print-none">
                        <div class="block-inner">
                            <h3><?php echo e(__('resume.portfolio')); ?></h3>
                            <?php
                                $portfolioItems = [
                                    ['https://portal.ks-marketing.info/', 'KS-PORTAL', '/images/ks-portal.png'],
                                    ['https://www.ido-tools.de/', 'Ido-Tools', '/images/idotools.png'],
                                    ['http://resume.ddns.net', 'My resume', '/images/myresume.png'],
                                    ['https://kuhpatenschaft.de', 'ANDECHSER NATUR', '/images/an.png'],
                                    ['https://www.mosquito-repellants.com/', 'Mosquito-Repellants', '/images/mr.png'],
                                    ['https://www.sk-kosmetik-shop.de/', 'SK-KOSMETIK', '/images/skkosmetik.png'],
                                ];
                            ?>
                            <div class="block-description">
                                <div class="accordion" id="portfolioAccordion">
                                    <?php $__currentLoopData = $portfolioItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $portfolioItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="portfolio<?php echo e($i); ?>">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($i); ?>" aria-expanded="true" aria-controls="collapse<?php echo e($i); ?>">
                                                    <?php echo e($portfolioItem[1]); ?>

                                                </button>
                                            </h2>
                                            <div id="collapse<?php echo e($i); ?>" class="accordion-collapse collapse<?php echo e($i === 0 ? ' show' : ''); ?>" aria-labelledby="portfolio<?php echo e($i); ?>" data-bs-parent="#portfolioAccordion">
                                                <div class="accordion-body">
                                                    <div class="portfolio-item">
                                                        <p><img src="<?php echo e(asset($portfolioItem[2])); ?>" width="300" /></p>
                                                        <p><?php echo e(__('resume.portfolio-description-'.$i)); ?></p>
                                                        <a href="<?php echo e($portfolioItem[0]); ?>" target="blank" class="button-2"><?php echo e(__('resume.toWebsite')); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="middle-right">
                    
                    <div class="block skills-block">
                        <div class="block-inner">
                            <h3><?php echo e(__('resume.skills')); ?></h3>
                            <ul class="list">
                                <li>
                                    <span class="title">PHP</span>
                                    <span class="stars stars-5"></span>
                                </li>
                                <li>
                                    <span class="title">JavaScript</span>
                                    <span class="stars stars-4"></span>
                                </li>
                                <li>
                                    <span class="title">HTML</span>
                                    <span class="stars stars-5"></span>
                                </li>
                                <li>
                                    <span class="title">CSS</span>
                                    <span class="stars stars-4"></span>
                                </li>
                                <li>
                                    <span class="title">Joomla</span>
                                    <span class="stars stars-4"></span>
                                </li>
                                <li>
                                    <span class="title">SASS/SCSS</span>
                                    <span class="stars stars-3"></span>
                                </li>
                                <li>
                                    <span class="title">MySQL</span>
                                    <span class="stars stars-4"></span>
                                </li>
                                <li>
                                    <span class="title">Redis</span>
                                    <span class="stars stars-3"></span>
                                </li>
                                <li>
                                    <span class="title">jQuery.js</span>
                                    <span class="stars stars-5"></span>
                                </li>
                                <li>
                                    <span class="title">Bootstrap</span>
                                    <span class="stars stars-4"></span>
                                </li>
                                <li>
                                    <span class="title">React.js</span>
                                    <span class="stars stars-2"></span>
                                </li>
                                <li>
                                    <span class="title">Laravel</span>
                                    <span class="stars stars-3"></span>
                                </li>
                                <li>
                                    <span class="title">Yii</span>
                                    <span class="stars stars-1"></span>
                                </li>
                                <li>
                                    <span class="title">GIT</span>
                                    <span class="stars stars-4"></span>
                                </li>
                                <li>
                                    <span class="title">JoomShopping</span>
                                    <span class="stars stars-5"></span>
                                </li>
                                <li>
                                    <span class="title">Magento</span>
                                    <span class="stars stars-1"></span>
                                </li>
                                <li>
                                    <span class="title">Shopware</span>
                                    <span class="stars stars-2"></span>
                                </li>
                                <li>
                                    <span class="title">xtCommerce</span>
                                    <span class="stars stars-3"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block languages-block">
                        <div class="block-inner">
                            <h3><?php echo e(__('resume.languages')); ?></h3>
                            <ul class="list">
                                <li>
                                    <span class="title"><?php echo e(__('resume.language1')); ?><small><?php echo e(__('resume.languageLevel1')); ?></small></span>
                                    <span class="stars stars-2"></span>
                                </li>
                                <li>
                                    <span class="title"><?php echo e(__('resume.language2')); ?><small><?php echo e(__('resume.languageLevel2')); ?></small></span>
                                    <span class="stars stars-5"></span>
                                </li>
                                <li>
                                    <span class="title"><?php echo e(__('resume.language3')); ?><small><?php echo e(__('resume.languageLevel3')); ?></small></span>
                                    <span class="stars stars-5"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH E:\coding\OpenServer\domains\resume\resources\views/welcome.blade.php ENDPATH**/ ?>
<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => '',
	'category'=>$category,
	'js'	=>array('macy','projects')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
    <section id="project-intro"
             class="container">
        <div class="flex-row outdent flex-vcenter">
            <img src="v03workflow-wires.png"
                 alt="workflow wireframes"
                 class="col5l col5m col4s col12x vertical">
            <div class="col7l col7m col8s col12x">
                <h1 class="project-title h1">User Workflows</h1>
                <p class="h4 project-date uiux">UI/UX Design<br>Fall 2019 </p>
                <h2 class="h3">Summary</h2>
                <p>Redesigning the whole Pointman app starting with the job scheduling experience for HVAC office staff.
                </p>
            </div>
        </div>
    </section>


    <section id="project-results"
             class="container">
         <div class="pad1">
             <h2 class="h3">The Final Design</h2>
                <p>The final design before we pivoted.</p>
         </div>    
        <div id="pm-workflows-results-gallery"
                     class="project-gallery"
                     data-sizes="4422">
                                         <figure class="project-img">
                        <a href="v05mobilejob.png"><img src="v05mobilejob.png"
                                 alt="Viewing a completed job, Mobile"></a>
                        <figcaption>Viewing a completed job, Mobile</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v05mobilecontact.png"><img src="v05mobilecontact.png"
                                 alt="Viewing a customer, Mobile"></a>
                        <figcaption>Viewing a customer, Mobile</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v05desktopcontact.png"><img src="v05desktopcontact.png"
                                 alt="Viewing a customer, Desktop"></a>
                        <figcaption>Viewing a customer, Desktop</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v05desktopjob2.png"><img src="v05desktopjob2.png"
                                 alt="Viewing an in progress job, Desktop"></a>
                        <figcaption>Viewing an in progress job, Desktop</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v05desktopjob.png"><img src="v05desktopjob.png"
                                 alt="Viewing a completed job, Desktop"></a>
                        <figcaption>Viewing a completed job, Desktop</figcaption>
                    </figure>

        </div>
    </section>
</main>
<?php include('../../footer.php');
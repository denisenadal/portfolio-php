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
    <section id="project-overview"
             class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                <h2 class="h3 col12x pad1">Project Overview</h2>
                <div id="pm-workflows-presentation-gallery"
                     class="col12x project-gallery "
                     data-sizes="4422">
                    <figure class="project-img">
                        <a href="cover-01.png"><img src="cover-01.png"
                                 alt="presentation asset"></a>
                    </figure>
                    <figure class="project-img">
                        <a href="cover-02.png"><img src="cover-02.png"
                                 alt="presentation asset"></a>
                    </figure>
                    <figure class="project-img">
                        <a href="cover-03.png"><img src="cover-03.png"
                                 alt="presentation asset"></a>
                    </figure>
                    <figure class="project-img">
                        <a href="cover-04.png"><img src="cover-04.png"
                                 alt="presentation asset"></a>
                    </figure>
                </div>
            </div>
    </section>
    <section id="project-process">
        <div class="container clearfix top-margin4">
            <div class="row outdent">
                <h2 class="h3 left-margin">Design Process</h2>
                <div class="col12x col4s col4m col4l pad1">
                    <p class="no-margin">
                    Once improving the user experience of the Pointman app became a priority for our organization we resumed the project to create customer and job screens to streamline the experience. Besides designing those 2 screens, I explored various common and uncommon workflows, and designed them to be intuitive and simple.
                    </p>
                    <figure class="project-img top-margin2">
                        <a href="v03workflow-wires.png"><img src="v03workflow-wires.png"
                                 alt="version 2 wireframes"></a>
                        <figcaption>version 2 wireframes</figcaption>
                    </figure>
                </div>
                <div id="pm-workflows-process-gallery" class=" col12x col8s col8m col8l project-gallery" data-sizes="3322">

                    <figure class="project-img">
                        <a href="v04-bits01.png"><img src="v04-bits01.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits02.png"><img src="v04-bits02.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits03.png"><img src="v04-bits03.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits04.png"><img src="v04-bits04.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits05.png"><img src="v04-bits05.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits06.png"><img src="v04-bits06.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                </div>
            </div>
    </section>
    <section id="project-scenarios" class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                                <div class=" col12x col6s col4m col3l pad1">
                    <figure class="project-img">
                        <a href="v04scenario-0.png"><img src="v04scenario-0.png"
                                 alt="cover image for scenario"></a>
                    </figure>
                </div>
                <div class="col12x col6s col8m col9l pad1">
                    <h2 class="h3 no-vpad">Specific Scenario</h2>
                    <p >
                        Part of validating this design and workflow was running it through several common and uncommon scenarios. For this example, we follow the workflow of a Customer Service Rep responding to a call from a Landlord asking for information about a recent job completed at a tenant's house.
                    </p>
                </div>
                <div id="pm-workflows-scenario-gallery"
                     class="project-gallery col12x"
                     data-sizes="5332">
                    <figure class="project-img">
                        <a href="v04scenario-01.png"><img src="v04scenario-01.png"
                                 alt="scenario step 1"></a>
                                 <figcaption>She starts by looking up the landlord</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-02.png"><img src="v04scenario-02.png"
                                 alt="scenario step 2"></a>
                                 <figcaption>After selecting the landlord, she see's his info. She can select the rental property from the properties section.</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-03.png"><img src="v04scenario-03.png"
                                 alt="scenario step 3"></a>
                                 <figcaption> After selecting the correct rental property, she can select the correct past job.</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-04.png"><img src="v04scenario-04.png"
                                 alt="scenario step 4"></a>
                                 <figcaption>She can view the details of the job</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-05.png"><img src="v04scenario-05.png"
                                 alt="scenario step 5"></a>
                                 <figcaption>She can dig into the invoice as well</figcaption>
                    </figure>
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
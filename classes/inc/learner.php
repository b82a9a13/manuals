<?php 
if(!isset($_SESSION['manuals_learner'])){
    exit();
} else if($_SESSION['manuals_learner'] != true){
    exit();
}
//CSS for the page?>
<link rel="stylesheet" href="./classes/css/style.css">
<?php //Content for the page?>
<div class="content-div">
    <h1 class="c-title"><b>Learner Manual</b></h1>
    <?php 
        //Introduction
        $template = (object)[
            'usertype' => 'learners'
        ];
        echo $OUTPUT->render_from_template('local_manuals/introduction', $template);
    
        //Include top content
        include_once('./classes/inc/top-content.php') 
    ?>
    <?php //Dashboard ?>
    <h2 class="section-title" id="dashboard_title"><b>Dashboard +</b></h2>
    <div id="dashboard" class="section-text" style="display: none;">
        <?php 
            //Introduction
            $template = (object)[
                'type' => 'learner'
            ];
            echo $OUTPUT->render_from_template('local_manuals/d-intro', $template);

            //Navigation Header
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/d-navh', $template);

            //Completion Progress Block
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/d-cpblock', $template);

            //Course Overview Block
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/d-coblock', $template);
        ?>
    </div>
    <?php //Course Page ?>
    <h2 class="section-title" id="coursepage_title"><b>Course Page +</b></h2>
    <div id="coursepage" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="c_introduction_title" >Introduction +</h3>
        <div id="c_introduction" class="section-text" style="display: none;"> 
            <img loading="lazy" class="content-img click" src="./classes/img/learner/c-introduction.jpg" alt="Course Page Example" id="c_introduction_img" > 
        </div>
        <h3 class="section-titlesub" id="c_accessmaa_title" >Accessing Modules and Activity +</h3>
        <div id="c_accessmaa" class="section-text" style="display: none;">
            <h4 class="h4-sub">Step 1</h4>
            <img loading="lazy" class="content-img" src="./classes/img/learner/c-accessmaa1.jpg" alt="Accessing Modules and Activity Step 1">
            <h4 class="h4-sub">Step 2</h4>
            <img loading="lazy" class="content-img" src="./classes/img/learner/c-accessmaa2.jpg" alt="Accessing Modules and Activity Step 2">
        </div>
        <h3 class="section-titlesub" id="c_assignment_title" >Assignment +</h3>
        <div id="c_assignment" class="section-text" style="display: none;">
            <h4 class="h4-sub">Step 1</h4>
            <img loading="lazy" class="content-img" src="./classes/img/learner/c-assignment1.jpg" alt="Assignment Step 1">
            <h4 class="h4-sub">Step 2</h4>
            <img loading="lazy" class="content-img click" src="./classes/img/learner/c-assignment2.jpg" alt="Assignment Step 2" id="c_assignment_img">
            <h4 class="h4-sub">Step 3</h4>
            <img loading="lazy" class="content-img" src="./classes/img/learner/c-assignment3.jpg" alt="Assignment Step 3">
            <p>
                Once you have submitted an assignment your coach will be notified of your submission, and once they have provided feedback for the submission you will be notified via email.
            </p>
        </div>
        <?php 
            //Online Text 
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/c-onlinetext', $template);
        ?>
    </div>
    <?php //Evidence Page ?>
    <h2 class="section-title" id="evidencepage_title"><b>Evidence Page +</b></h2>
    <div id="evidencepage" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="e_introduction_title" >Introduction +</h3>
        <div id="e_introduction" class="section-text" style="display: none;">
            <p>
                This page is used for uploading evidence for your course, and you can link the relevant competencies to your evidence. Then you can send the competencies for review.
            </p>
            <p>
                How to access the page can be found in <a onclick="mylearning()" href="#d_mylearning" >my learning</a>.
            </p>
        </div>
        <h3 class="section-titlesub" id="e_defaultview_title" >Default View +</h3>
        <div id="e_defaultview" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/learner/e-defaultview.jpg" alt="Default View Example">
        </div>
        <h3 class="section-titlesub" id="e_availableview_title" >Available Evidence View +</h3>
        <div id="e_availableview" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/learner/e-availableview.jpg" alt="Avaialable Evidence View Example">
        </div>
        <h3 class="section-titlesub" id="e_newevidence_title" >Adding New Evidence +</h3>
        <div id="e_newevidence" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/learner/e-newevidence.jpg" alt="Adding New Evidence Example">
        </div>
        <h3 class="section-titlesub" id="e_editevidence_title" >Editing Evidence +</h3>
        <div id="e_editevidence" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/learner/e-editevidence.jpg" alt="Editing Evidence Example">
        </div>
        <h3 class="section-titlesub" id="e_linkcomp_title" >Linking Competencies +</h3>
        <div id="e_linkcomp" class="section-text" style="display: none;">
            <h4 class="h4-sub">Step 1</h4>
            <img loading="lazy" class="content-img" src="./classes/img/learner/e-linkcomp1.jpg" alt="Linking Competencies Step 1">
            <h4 class="h4-sub">Step 2</h4>
            <p>This will appear after clicking link competencies. You can click a competency you want to link but, to select multiple competencies hold the key ctrl and click the competencies you want to select.</p>
            <img loading="lazy" class="content-img" src="./classes/img/learner/e-linkcomp2.jpg" alt="Linking Competencies Step 2">
        </div>
    </div>
    <?php //Learning Plan ?>
    <h2 class="section-title" id="learningplan_title"><b>Learning Plan +</b></h2>
    <div id="learningplan" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="l_introduction_title">Introduction +</h3>
        <div id="l_introduction" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/learner/l-introduction.jpg" alt="Learning Plan Default View Example">
        </div>
        <h3 class="section-titlesub" id="l_viewplan_title">Viewing A Plan +</h3>
        <div id="l_viewplan" class="section-text" style="display: none;">
            <p>Here is an example of a learning plan and what you'll see when viewing one.</p>
            <img loading="lazy" class="content-img" src="./classes/img/learner/l-viewplan1.jpg" alt="Viewing A Plan Example">
            <p><b>Edit -</b> this allows you to sent the competencies for review. The instructions are below.</p>
            <img loading="lazy" class="content-img" src="./classes/img/learner/l-viewplan2.jpg" alt="Send For Review Example">
        </div>
    </div>
    <?php //Appendix ?>
    <h2 class="section-title" id="appendix_title"><b>Appendix +</b></h2>
    <div id="appendix" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="a_dashboard_title">Dashboard +</h3>
        <div id="a_dashboard" class="section-text" style="display: none;">
            <?php 
                //Account Navigation
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-accountnav', $template);

                //Calendar Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-calendarblock', $template);

                //Private Files Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-privatefile', $template);

                //Navigation Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-navblock', $template);

                //Accessibility Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-accessblock', $template);

                //Accessibility Options
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/ad-accessopt', $template);
            ?>
        </div>
        <h3 class="section-titlesub" id="a_evidencepage_title">Evidence Page +</h3>
        <div id="a_evidencepage" class="section-text" style="display: none;">
            <p>To find your evidence page, click my learning and then click submit evidence.</p>
            <?php
                //Viewing and Editing Invidual Evidence
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/aep-viewanedit', $template);
            ?>
        </div>
        <h3 class="section-titlesub" id="a_coursepage_title">Course Page +</h3>
        <div id="a_coursepage" class="section-text" style="display: none;">
            <p>To find the course page, click my courses and click the course you want to go to.</p>
            <?php
                //Modules Types
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/acp-moduletype', $template);

                //Calendar Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/acp-calendarblock', $template);

                //Viewing Feedback
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/acp-viewfeed', $template);
            ?> 
        </div>
        <?php 
            //Text Box Options
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/a-textboxopt', $template);
        ?>
        <h3 class="section-titlesub" id="a_profilepage_title">Profile Page +</h3>
        <div id="a_profilepage" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="app_introduction_title">Introduction +</h4>
            <div id="app_introduction" class="section-text" style="display: none;">
                <p>To find your profile page, click your name at the top of the page and then click view profile</p>
                <img loading="lazy" class="content-img" src="./classes/img/learner/app-introduction.jpg" alt="Profile Page Introduction Example">
            </div>
            <h4 class="section-titlesub" id="app_courseopt_title">Course Option +</h4>
            <div id="app_courseopt" class="section-text" style="display: none;">
                <img loading="lazy" class="content-img" src="./classes/img/learner/app-courseopt.jpg" alt="Profile Page Course Option Example">
            </div>
            <h4 class="section-titlesub" id="app_moreopt_title">More Option +</h4>
            <div id="app_moreopt" class="section-text" style="display: none;">
                <img loading="lazy" class="content-img" src="./classes/img/learner/app-moreopt.jpg" alt="Profile Page More Option Example">
            </div>
            <h4 class="section-titlesub" id="app_eprofileopt_title">Edit Profile Option +</h4>
            <div id="app_eprofileopt" class="section-text" style="display: none;">
                <img loading="lazy" class="content-img" src="./classes/img/learner/app-eprofileopt.jpg" alt="Profile Page Edit Profile Option Example">
            </div>
        </div>
        <?php 
            //Private Files
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/a-privatefile', $template);

            //Glossary 
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/a-glossary', $template);

            //Process Flow Chart
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/a-procflow', $template);
        ?>
    </div>
</div>
<?php //Javascript for page ?>
<script src="./classes/js/functions.js"></script>
<?php //Javascript for manual?>
<script src="./classes/js/learncoach.js"></script>
<script src="./classes/js/learner.js"></script>
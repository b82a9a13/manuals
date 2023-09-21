<?php 
if(!isset($_SESSION['manuals_coach'])){
    exit();
} else if($_SESSION['manuals_coach'] != true){
    exit();
}
//CSS for the page?>
<link rel="stylesheet" href="./classes/css/style.css">
<?php //Content for the page?>
<div class="content-div">
    <h1 class="c-title"><b>Coach Manual</b></h1>
    <?php 
        //Introduction
        $template = (object)[
            'usertype' => 'coaches'
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
                'type' => 'coach'
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
        <h3 class="section-titlesub" id="c_introduction_title">Introduction +</h3>
        <div id="c_introduction" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img click" src="./classes/img/coach/c-introduction.jpg" alt="Course Page Introduction Example" id="c_introduction_img">
        </div>
        <h3 class="section-titlesub" id="c_cpblock_title">Completion Progress Block +</h3>
        <div id="c_cpblock" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="ccpb_using_title">Using The Block +</h4>
            <div id="ccpb_using" class="section-text" style="display: none;">
                <p>You have two options to view student progress.</p>
                <img loading="lazy" class="content-img" src="./classes/img/coach/c-cpblock.jpg" alt="Completion Progress Block Example">
            </div>
            <h4 class="section-titlesub" id="ccpb_overview_title">Overview Of Students +</h4>
            <div id="ccpb_overview" class="section-text" style="display: none;">
                <p>You have three options when it comes to viewing a learner's progress</p>
                <img loading="lazy" class="content-img" src="./classes/img/coach/c-cpoverview.jpg" alt="Overview of Students Example">
            </div>
        </div>
        <h3 class="section-titlesub" id="c_grading_title">Grading Assignment +</h3>
        <div id="c_grading" class="section-text" style="display: none;">
            <h4>Step 1</h4>
            <p>Inside a module of a course, you can find assignments, here is an example of an assignment with a submission.</p>
            <img loading="lazy" class="content-img" src="./classes/img/coach/c-grading1.jpg" alt="Grading Assignment Step 1 Example">
            <h4>Step 2</h4>
            <img loading="lazy" class="content-img" src="./classes/img/coach/c-grading2.jpg" alt="Grading Assignment Step 2 Example">
            <h4>Step 3</h4>
            <img loading="lazy" class="content-img" src="./classes/img/coach/c-grading3.jpg" alt="Grading Assignment Step 3 Example">
            <p>Quick Grading can be used to grade multiple learners at once. <a href="#acp_quickgrade" onclick="quickgrade()">Click here to view quick grading.</a></p>
        </div>
        <h3 class="section-titlesub" id="c_acreport_title">Activity Completion Report +</h3>
        <div id="c_acreport" class="section-text" style="display: none;">
            <h4 class="section-titlesub" id="cacr_introduction_title">Introduction +</h4>
            <div id="cacr_introduction" class="section-text" style="display: none;">
                <p>
                    To find this report you can use the administration block while on a course.
                </p>
                <p>
                    Below is an example of what you will see when on the activity completion report
                </p>
                <img loading="lazy" src="./classes/img/adminandcoach/cacr-introduction.jpg" alt="Activity Completion Report Example" class="content-img">
                <p>To see the different completion states, click the heading below.</p>
            </div>
            <h4 class="section-titlesub" id="cacr_keys_title">Activity Completion Keys +</h4>
            <div id="cacr_keys" class="section-text" style="display: none;">
                <img loading="lazy" src="./classes/img/adminandcoach/cacr-keys.jpg" alt="Activity Completion Keys" class="content-img">
            </div>
        </div>
        <?php 
            //Online Text 
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/c-onlinetext', $template);
        ?>
    </div>
    <?php //Evidence Page ?>
    <h2 class="section-title" id="evidencepage_title"><b>Evidence Page For Learners +</b></h2>
    <div id="evidencepage" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="ep_introduction_title">Introduction +</h3>
        <div id="ep_introduction" class="section-text" style="display: none;">
            <p>
                To access this page, you will need to go to the course the learner is enrolled in, then click overview of students and after that click the name of the student you want to view evidence for. Then on the learner's profile go to more, then click learning plans and then click evidence.
            </p>
        </div>
        <h3 class="section-titlesub" id="ep_default_title">Default View +</h3>
        <div id="ep_default" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/coach/epi-default.jpg" alt="Evidence Page Default View Example">
        </div>
        <h3 class="section-titlesub" id="ep_available_title">Available Evidence View +</h3>
        <div id="ep_available" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/coach/epi-available.jpg" alt="Evidence Page Available Evidence Example">
        </div>
        <h3 class="section-titlesub" id="ep_addnew_title">Adding New Evidence +</h3>
        <div id="ep_addnew" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/coach/ep-addnew.jpg" alt="Evidence Page Adding New Evidence Example">
        </div>
        <h3 class="section-titlesub" id="ep_edit_title">Editing Evidence +</h3>
        <div id="ep_edit" class="section-text" style="display: none;">
            <img loading="lazy" src="./classes/img/coach/ep-edit.jpg" alt="Evidence Page Editing Evidence" class="content-img">
            <p>
                If you click edit this evidence, you'll have the same layout as the adding new evidence section but with data already in the fields.
            </p>
        </div>
    </div>
    <?php //Learner Profile ?>
    <h2 class="section-title" id="learnerprofile_title"><b>Learner Profile +</b></h2>
    <div id="learnerprofile" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="lpr_introduction_title">Introduction +</h3>
        <div id="lpr_introduction" class="section-text" style="display: none;">
            <p>
                To access the learner profile, you must be on a course which the learner is enrolled in and then go to overview of students and then click the learners name.
            </p>
            <img loading="lazy" class="content-img" src="./classes/img/coach/lpr-introduction.jpg" alt="Learner Profile About Me Example">
        </div>
        <h3 class="section-titlesub" id="lpr_courseopt_title">Courses Option +</h3>
        <div id="lpr_courseopt" class="section-text" style="display: none;">
            <p>This page gives you the option to view a learner's profile for a specific course.</p>
            <img loading="lazy" class="content-img" src="./classes/img/coach/lpr-courseopt.jpg" alt="Learner Profile Courses Option Example">
        </div>
        <h3 class="section-titlesub" id="lpr_moreopt_title">More Option +</h3>
        <div id="lpr_moreopt" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/coach/lpr-moreopt.jpg" alt="Learner Profile More Option Example">
            <p>
                Some of the options here aren't all available on the user's full profile, only when you have a course selected from the courses option
            </p>
        </div>
    </div>
    <?php //Learning Plan ?>
    <h2 class="section-title" id="learningplan_title"><b>Learning Plans +</b></h2>
    <div id="learningplan" class="section-text" style="display: none;">
        <h3 class="section-titlesub" id="l_introduction_title">Introduction +</h3>
        <div id="l_introduction" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/coach/l-introduction.jpg" alt="Learning Plans Introduction">
        </div>
        <h3 class="section-titlesub" id="l_viewplan_title">Viewing A Plan +</h3>
        <div id="l_viewplan" class="section-text" style="display: none;">
            <img loading="lazy" class="content-img" src="./classes/img/coach/l-viewplan.jpg" alt="Viewing A Learning Plan">
        </div>
        <h3 class="section-titlesub" id="l_reviewcomp_title">Reviewing Competencies +</h3>
        <div id="l_reviewcomp" class="section-text" style="display: none;">
            <h4>Step 1</h4>
            <img loading="lazy" src="./classes/img/coach/l-reviewcomp1.jpg" alt="Reviewing Competencies Step 1" class="content-img">
            <h4>Step 2</h4>
            <img loading="lazy" src="./classes/img/coach/l-reviewcomp2.jpg" alt="Reviewing Competencies Step 2" class="content-img">
            <h4>Step 3</h4>
            <img loading="lazy" src="./classes/img/coach/l-reviewcomp3.jpg" alt="Reviewing Competencies Step 3" class="content-img">
            <h4>Step 4</h4>
            <img loading="lazy" src="./classes/img/coach/l-reviewcomp4.jpg" alt="Reviewing Competencies Step 4" class="content-img">
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
            <h4 class="section-titlesub" id="ad_learnplan_title">Learning Plans Block +</h4>
            <div id="ad_learnplan" class="section-text" style="display: none;">
                <p>
                    Only competencies sent for review in a course you are a head coach or an assessor for will appear in this block.
                </p>
                <img loading="lazy" src="./classes/img/coach/ad-learnplan.jpg" alt="Learning Plans Block Example" class="content-img">
            </div>
            <h4 class="section-titlesub" id="ad_ntazone_title">NTA Zone +</h4>
            <div id="ad_ntazone" class="section-text" style="display: none;">
                <p>
                    This block may appear on your dashboard since it is only accessible by certain coaches. It contains links that you can click to be redirected to depending on what you clicked on. 
                    The main link you will use is highlighted below.
                </p>
                <img loading="lazy" src="./classes/img/coach/ad-ntazone.jpg" alt="NTA Zone Block Example" class="content-img">
            </div>
        </div>
        <h3 class="section-titlesub" id="a_coursepage_title">Course Page +</h3>
        <div id="a_coursepage" class="section-text" style="display: none;">
            <p>To find the course page, click my courses and click the course you want to go to.</p>
            <?php 
                //Calendar Block
                $template = (object)[];
                echo $OUTPUT->render_from_template('local_manuals/acp-calendarblock', $template);
            ?>
            <h4 class="section-titlesub" id="acp_courseadmin_title">Course Administration +</h4>
            <div id="acp_courseadmin" class="section-text" style="display: none;">
                <img loading="lazy" class="content-img" src="./classes/img/coach/acp-courseadmin.jpg" alt="Course Page Course Administration Example">
            </div>
            <h4 class="section-titlesub" id="acp_quickgrade_title">Quick Grading +</h4>
            <div id="acp_quickgrade" class="section-text" style="display: none;">
                <h5 class="section-titlesub" id="acpqg_opt1_title">Option 1 +</h5>
                <div id="acpqg_opt1" class="section-text" style="display: none;">
                    <h6>Step 1</h6>
                    <p>
                        You must be on the course page where you want to grade the learners enrolled in the course and then use the navigation block as shown.
                    </p>
                    <img loading="lazy" src="./classes/img/coach/acpqg1-quickgrade1.jpg" alt="Quick Grading Step 1" class="content-img">
                    <h6>Step 2</h6>
                    <p>
                        You have two options to select when quick grading which are shown below.
                    </p>
                    <img loading="lazy" src="./classes/img/coach/acpqg1-quickgrade2.jpg" alt="Quick Grading Step 2" class="content-img">
                    <h6>Step 3</h6>
                    <img loading="lazy" src="./classes/img/coach/acpqg1-quickgrade3.jpg" alt="Quick Grading Step 3" class="content-img">
                </div>
                <h5 class="section-titlesub" id="acpqg_opt2_title">Option 2 +</h5>
                <div id="acpqg_opt2" class="section-text" style="display: none;">
                    <h6>Step 1</h6>
                    <p>
                        You can review all submissions for a single module by navigating to the course of your choice and find the module you want to view the submissions for and click the module.
                    </p>
                    <img loading="lazy" src="./classes/img/coach/acpqg2-quickgrade1.jpg" alt="Quick Grading Step 1" class="content-img">
                    <h6>Step 2</h6>
                    <p>Navigate to options near the bottom of the page.</p>
                    <img loading="lazy" src="./classes/img/coach/acpqg2-quickgrade2.jpg" alt="Quick Grading Step 2" class="content-img">
                    <h6>Step 3</h6>
                    <img loading="lazy" src="./classes/img/coach/acpqg2-quickgrade3.jpg" alt="Quick Grading Step 3" class="content-img">
                    <p>Once you have done the steps, you can go to the bottom of the page and use this to navigate.</p>
                    <img loading="lazy" src="./classes/img/coach/acpqg2-quickgrade4.jpg" alt="Quick Grading Navigation" class="content-img">
                </div>
            </div>
        </div>
        <?php 
            //Text Box Options
            $template = (object)[];
            echo $OUTPUT->render_from_template('local_manuals/a-textboxopt', $template);
        ?>
        <h3 class="section-titlesub" id="a_learnerpage_title">Learner Page +</h3>
        <div id="a_learnerpage" class="section-text" style="display: none;">
            <p>
                To access the learner page, you must be on a course which the learner is enrolled in and then go to overview of students and then click the learners name.
            </p>
            <h4>More Option</h4>
            <img loading="lazy" class="content-img" src="./classes/img/coach/a-lpr-moreopt.jpg" alt="Learner Page More Option Example">
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
<?php //Functions for javascript?>
<script src="./classes/js/functions.js"></script>
<?php //Javascript for manual?>
<script src="./classes/js/learncoach.js"></script>
<script src="./classes/js/coach.js"></script>
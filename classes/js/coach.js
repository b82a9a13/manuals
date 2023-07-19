//Course Page section
openHeaderBold('coursepage', 'Course Page')
openHeader('c_introduction', 'Introduction')
openHeader('c_cpblock', 'Completion Progress Block')
openHeader('ccpb_using', 'Using The Block')
openHeader('ccpb_overview', 'Overview Of Students')
openHeader('c_grading', 'Grading Assignment')
openHeader('c_acreport', 'Activity Completion Report')
openHeader('cacr_introduction', 'Introduction')
openHeader('cacr_keys', 'Activity Completion Keys')

//Evidence Page section
openHeaderBold('evidencepage', 'Evidence Page For Learners')
openHeader('ep_introduction', 'Introduction')
openHeader('ep_default', 'Default View')
openHeader('ep_available', 'Available Evidence View')
openHeader('ep_addnew', 'Adding New Evidence')
openHeader('ep_edit', 'Editing Evidence')

//Learner Profile section
openHeaderBold('learnerprofile', 'Learner Profile')
openHeader('lpr_introduction', 'Introduction')
openHeader('lpr_courseopt', 'Courses Option')
openHeader('lpr_moreopt', 'More Option')

//Learner Learning Plan section
openHeaderBold('learningplan', 'Learning Plans')
openHeader('l_introduction', 'Introduction')
openHeader('l_viewplan', 'Viewing A Plan')
openHeader('l_reviewcomp', 'Reviewing Competencies')

//Appendix section
openHeaderBold('appendix', 'Appendix')
openHeader('a_dashboard', 'Dashboard')
openHeader('ad_accountnav', 'Account Navigation')
openHeader('ad_calendarblock', 'Calendar Block')
openHeader('ad_privatefile', 'Private Files Block')
openHeader('ad_navblock', 'Navigation Block')
openHeader('ad_accessblock', 'Accessibility Block')
openHeader('ad_accessopt', 'Accessibility Options')
openHeader('adao_pagewidth', 'Page Width')
openHeader('adao_blocks', 'Display Blocks')
openHeader('ad_learnplan', 'Learning Plans Block')
openHeader('ad_ntazone', 'NTA Zone')
openHeader('a_coursepage', 'Course Page')
openHeader('acp_calendarblock', 'Calendar Block')
openHeader('acp_courseadmin', 'Course Administration')
openHeader('acp_quickgrade', 'Quick Grading')
openHeader('acpqg_opt1', 'Option 1')
openHeader('acpqg_opt2', 'Option 2')
openHeader('a_learnerpage', 'Learner Page')
openHeader('a_glossary', 'Glossary')
openHeader('ag_accessglos', 'Accessing Glossary')
openHeader('ag_glospage', 'Glossary Page')
openHeader('a_procflow', 'Process Flow Chart')
openHeader('a_privatefile', 'Private Files')
openHeader('apf_introduction', 'Introduction')
openHeader('apf_fileandfolder', 'File and Folder Options')
openHeader('apffaf_fileopt', 'File Option')
openHeader('apffaf_folderopt', 'Folder Option')
openHeader('apf_sortopt', 'Sorting Options')
openHeader('apf_managefaf', 'Managin Files and Folders')
openHeader('apfm_folder', 'Managing Folders')
openHeader('apfm_file', 'Managing Files')

//Introduction Image click
const dIntroductionImage = document.getElementById('d_introduction_img')
dIntroductionImage.onclick = (e) => {
    const array = WidthandHeight('d_introduction_img', e)
    if(array[0] >= (array[2]*0.3104) && array[0] <= (array[2]*0.4882) && array[1] >= (array[3]*0.1083) && array[1] <= (array[3]*0.1469)){
        openTitleandContent('d_navhead_title', 'd_navhead', 'Navigation Header')
    } else if (array[0] >= (array[2]*0.8631) && array[0] <= (array[2]*0.9921) && array[1] >= (array[3]*0.3955) && array[1] <= (array[3]*0.4874)){
        openTitleandContent('d_completion_title', 'd_completion', 'Completion Progress Block')
    } else if (array[0] >= (array[2]*0.7132) && array[0] <= (array[2]*0.9309) && array[1] >= (array[3]*0.7619) && array[1] <= (array[3]*0.8025)){
        openTitleandContent('d_overview_title', 'd_overview', 'Course Overview Block')
    } else if (array[0] >= (array[2]*0.7583) && array[0] <= (array[2]*0.9456) && array[1] >= (array[3]*0.0008) && array[1] <= (array[3]*0.0391)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accountnav_title', 'ad_accountnav', 'Account Navigation')
    } else if (array[0] >= (array[2]*0.0143) && array[0] <= (array[2]*0.1022) && array[1] >= (array[3]*0.6217) && array[1] <= (array[3]*0.7002)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_privatefile_title', 'ad_privatefile', 'Private Files Block')
    } else if (array[0] >= (array[2]*0.3067) && array[0] <= (array[2]*0.4705) && array[1] >= (array[3]*0.7460) && array[1] <= (array[3]*0.7863)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_navblock_title', 'ad_navblock', 'Navigation Block')
    } else if (array[0] >= (array[2]*0.3483) && array[0] <= (array[2]*0.5213) && array[1] >= (array[3]*0.8638) && array[1] <= (array[3]*0.9020)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessblock_title', 'ad_accessblock', 'Accessibility Block')
    } else if (array[0] >= (array[2]*0) && array[0] <= (array[2]*0.1074) && array[1] >= (array[3]*0.4826) && array[1] <= (array[3]*0.5453)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_calendarblock_title', 'ad_calendarblock', 'Calendar Block')
    } else if (array[0] >= (array[2]*0.8577) && array[0] <= (array[2]*0.9829) && array[1] >= (array[3]*0.1612) && array[1] <= (array[3]*0.2183)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessopt_title', 'ad_accessopt', 'Accessibility Options')
    } else if (array[0] >= (array[2]*0.7031) && array[0] <= (array[2]*0.9067) && array[1] >= (array[3]*0.2454) && array[1] <= (array[3]*0.2863)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_learnplan_title', 'ad_learnplan', 'Learning Plans Block')
    }
}

let cIntroductionImg = document.getElementById('c_introduction_img')
cIntroductionImg.onclick = (e) => {
    const array = WidthandHeight('c_introduction_img', e)
    if(array[0] >= (array[2]*0.0026) && array[0] <= (array[2]*0.1232) && array[1] >= (array[3]*0.0009) && array[1] <= (array[3]*0.0819)){
        document.getElementById('dashboard_title').innerHTML = 'Dashboard -'
        document.getElementById('dashboard').style.display = 'block'
        openTitleandContent('d_completion_title','d_completion','Completion Progress Block')
    } else if (array[0] >= (array[2]*0.0159) && array[0] <= (array[2]*0.1078) && array[1] >= (array[3]*0.1324) && array[1] <= (array[3]*0.2167)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_privatefile_title', 'ad_privatefile', 'Private Files')
    } else if (array[0] >= (array[2]*0.0018) && array[0] <= (array[2]*0.1058) && array[1] >= (array[3]*0.2857) && array[1] <= (array[3]*0.3500)){
        openAppendix()
        openACoursePage()
        openTitleandContent('acp_calendarblock_title', 'acp_calendarblock', 'Calendar Block')
    } else if (array[0] >= (array[2]*0.0067) && array[0] <= (array[2]*0.1232) && array[1] >= (array[3]*0.5553) && array[1] <= (array[3]*0.6181)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_navblock_title', 'ad_navblock', 'Navigation Block')
    } else if (array[0] >= (array[2]*0) && array[0] <= (array[2]*0.1236) && array[1] >= (array[3]*0.6875) && array[1] <= (array[3]*0.7532)){
        openAppendix()
        openACoursePage()
        openTitleandContent('acp_courseadmin_title', 'acp_courseadmin', 'Course Administration')
    } else if (array[0] >= (array[2]*0.0296) && array[0] <= (array[2]*0.1524) && array[1] >= (array[3]*0.9320) && array[1] <= (array[3]*0.9978)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessblock_title','ad_accessblock','Accessibility Block')
    }
}
function quickgrade(){
    openAppendix()
    openACoursePage()
    openTitleandContent('acp_quickgrade_title', 'acp_quickgrade', 'Quick Grading')
}
//Course Page section
openHeaderBold('coursepage', 'Course Page')
openHeader('c_introduction', 'Introduction')
openHeader('c_accessmaa', 'Accessing Modules and Activity')
openHeader('c_assignment', 'Assignment')

//Evidence Page section
openHeaderBold('evidencepage', 'Evidence Page')
openHeader('e_introduction', 'Introduction')
openHeader('e_defaultview', 'Default View')
openHeader('e_availableview', 'Available Evidence View')
openHeader('e_newevidence', 'Adding New Evidence')
openHeader('e_editevidence', 'Editing Evidence')
openHeader('e_linkcomp', 'Linking Competencies')

//Learning Plan section
openHeaderBold('learningplan', 'Learning Plan')
openHeader('l_introduction', 'Introduction')
openHeader('l_viewplan', 'Viewing A Plan')

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
openHeader('a_evidencepage', 'Evidence Page')
openHeader('aep_viewanedit', 'Viewing and Editing Individual Evidence')
openHeader('a_coursepage', 'Course Page')
openHeader('acp_moduletype', 'Module Types')
openHeader('acpmt_page', 'Page')
openHeader('acpmt_scorm', 'SCORM / E-Learning')
openHeader('acpmt_multichoice', 'Multiple Choice / Quiz')
openHeader('acpmt_h5p', 'H5P')
openHeader('acp_calendarblock', 'Calendar Block')
openHeader('acp_viewfeed', 'Viewing Feedback')
openHeader('a_profilepage', 'Profile Page')
openHeader('app_introduction', 'Introduction')
openHeader('app_courseopt', 'Course Option')
openHeader('app_moreopt', 'More Option')
openHeader('app_eprofileopt', 'Edit Profile Option')
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
    if(array[0] >= (array[2]*0.2862) && array[0] <= (array[2]*0.4638) && array[1] >= (array[3]*0.1187) && array[1] <= (array[3]*0.1560)){
        openTitleandContent('d_navhead_title', 'd_navhead', 'Navigation Header')
    } else if (array[0] >= (array[2]*0.6950) && array[0] <= (array[2]*0.9297) && array[1] >= (array[3]*0.2988) && array[1] <= (array[3]*0.3365)){
        openTitleandContent('d_completion_title', 'd_completion', 'Completion Progress Block')
    } else if (array[0] >= (array[2]*0.7148) && array[0] <= (array[2]*0.92) && array[1] >= (array[3]*0.6742) && array[1] <= (array[3]*0.7096)){
        openTitleandContent('d_overview_title', 'd_overview', 'Course Overview Block')
    } else if (array[0] >= (array[2]*0.7871) && array[0] <= (array[2]*0.9748) && array[1] >= (array[3]*0.0048) && array[1] <= (array[3]*0.0431)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accountnav_title', 'ad_accountnav', 'Account Navigation')
    } else if (array[0] >= (array[2]*0.0264) && array[0] <= (array[2]*0.1097) && array[1] >= (array[3]*0.6328) && array[1] <= (array[3]*0.7139)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_privatefile_title', 'ad_privatefile', 'Private Files Block')
    } else if (array[0] >= (array[2]*0.3602) && array[0] <= (array[2]*0.5235) && array[1] >= (array[3]*0.7788) && array[1] <= (array[3]*0.8154)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_navblock_title', 'ad_navblock', 'Navigation Block')
    } else if (array[0] >= (array[2]*0.3882) && array[0] <= (array[2]*0.5563) && array[1] >= (array[3]*0.8972) && array[1] <= (array[3]*0.9310)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessblock_title', 'ad_accessblock', 'Accessibility Block')
    } else if (array[0] >= (array[2]*0.0230) && array[0] <= (array[2]*0.1224) && array[1] >= (array[3]*0.5111) && array[1] <= (array[3]*0.5661)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_calendarblock_title', 'ad_calendarblock', 'Calendar Block')
    } else if (array[0] >= (array[2]*0.8774) && array[0] <= (array[2]*1) && array[1] >= (array[3]*0.2034) && array[1] <= (array[3]*0.2616)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessopt_title', 'ad_accessopt', 'Accessibility Options')
    }
}

//Course Assignment Step 2 Click
const cAssignmentImg = document.getElementById('c_assignment_img')
cAssignmentImg.onclick = (e) => {
    const array = WidthandHeight('c_assignment_img', e)
    if(array[0] >= (array[2]*0.7462) && array[0] <= (array[2]*0.8212) && array[1] >= (array[3]*0.1758) && array[1] <= (array[3]*0.2158)){
        let cOnlinetextTitleTemp = document.getElementById('c_onlinetext_title')
        cOnlinetextTitleTemp.innerHTML = 'Online Text (Option A) -'
        document.getElementById('c_onlinetext').style.display = 'block'
        cOnlinetextTitleTemp.scrollIntoView()
    }
}
//Course Introduction Image Clicked
let cIntroductionImg = document.getElementById('c_introduction_img')
cIntroductionImg.onclick = (e) => {
    const array = WidthandHeight('c_introduction_img', e)
    if(array[0] >= (array[2]*0.3050) && array[0] <= (array[2]*0.5392) && array[1] >= (array[3]*0.0022) && array[1] <= (array[3]*0.0431)){
        document.getElementById('dashboard_title').innerHTML = 'Dashboard -'
        document.getElementById('dashboard').style.display = 'block'
        openTitleandContent('d_completion_title','d_completion','Completion Progress Block')
    } else if (array[0] >= (array[2]*0.0067) && array[0] <= (array[2]*0.1) && array[1] >= (array[3]*0.0383) && array[1] <= (array[3]*0.1308)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_privatefile_title', 'ad_privatefile', 'Private Files')
    } else if (array[0] >= (array[2]*0.0087) && array[0] <= (array[2]*0.1139) && array[1] >= (array[3]*0.3365) && array[1] <= (array[3]*0.4068)){
        openAppendix()
        openACoursePage()
        openTitleandContent('acp_calendarblock_title','acp_calendarblock','Calendar Block')
    } else if (array[0] >= (array[2]*0.0046) && array[0] <= (array[2]*0.1191) && array[1] >= (array[3]*0.5211) && array[1] <= (array[3]*0.5839)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_navblock_title','ad_navblock','Navigation Block')   
    } else if (array[0] >= (array[2]*0.0087) && array[0] <= (array[2]*0.1405) && array[1] >= (array[3]*0.8015) && array[1] <= (array[3]*0.8670)){
        openAppendix()
        openADashboard()
        openTitleandContent('ad_accessblock_title','ad_accessblock','Accessibility Block')
    }
}
//Opens My Learning section
function mylearning(){
    document.getElementById('dashboard_title').innerHTML = '<b>Dashboard -</b>'
    document.getElementById('dashboard').style.display = 'block'
    document.getElementById('d_navhead_title').innerHTML = 'Navigation Header -'
    document.getElementById('d_navhead').style.display = 'block'
}
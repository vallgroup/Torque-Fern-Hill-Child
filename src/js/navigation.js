// Navigation JS
jQuery(document).ready(function($) {

  // Define general page variables
	const isRoot = location.pathname == '/';
  const currPage = window.location.pathname;
  // Header variable
  const headerSelector = 'header';
  const mobileSubNavDropDownActiveSelector = 'drop-down-active';
  // Case Study variables
  const isCaseStudy = currPage.indexOf("/case-study/") > -1;
  const caseStudyNavContainerCls = '.case-study-sub-nav-container';
  const fixedCaseStudyNavContainerCls = 'fixed-nav';
  const caseStudyNavItemSelector = '.case-study-sub-nav-container .sub-nav-item';
  const activeCaseStudyNavItemSelector = 'active';
  let subNavOffset = $(caseStudyNavContainerCls).length ? $(caseStudyNavContainerCls).offset().top : 0; // offset of sub-nav, from top of screen
  const scrollBuffer = $(headerSelector).outerHeight(); // height of header, used to calculate whether user scrolled past certain point

  /**
   * General Pages
   */
  $('.torque-header-menu-items-inline-wrapper .torque-menu-item-wrapper.parent > a').on('click', function(e){
    // Ensure it is a drop-down menu, and not a link
    if ($(this).attr('href') === '#') {
      // stop page jumping around if parent menu link href is '#'
      e.preventDefault();
    }
  });

  // Moblie menu drop-down show/hide
  $('.torque-header-menu-items-mobile .torque-menu-item-wrapper.parent > a').on('click', function(e){
    // Ensure it is a drop-down menu, and not a link
    if ($(this).attr('href') === '#') {
      // stop page jumping around if parent menu link href is '#'
      e.preventDefault();

      const itemWrapper = $(this).closest('.parent');
      
      if (itemWrapper.hasClass(mobileSubNavDropDownActiveSelector)) {
        itemWrapper.removeClass(mobileSubNavDropDownActiveSelector);
      } else {
        itemWrapper.addClass(mobileSubNavDropDownActiveSelector);
      }
    }
  });

  // On scroll
  // $(window).scroll(function(){});
  
  // On resize
  $(window).resize(function(){
    // Reset variables for screen width and header height
    headerHeight = $(headerSelector).outerHeight();
    currScreenWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    isMobile = currScreenWidth <= 767;
    isTablet = currScreenWidth > 767 && currScreenWidth <= 1023;
    isDesktop = currScreenWidth > 1023;
  });


  /**
   * Case Study Pages
   */
  if (isCaseStudy) {
    // Update sub-nav item styled based on clicked item
    // TODO: do this based on scroll position?
    $(caseStudyNavItemSelector).click(function() {
      // Reset the sub-nav styling
      $(caseStudyNavItemSelector).each(function() {
        $(this).removeClass(activeCaseStudyNavItemSelector)
      });
      // Set the selected sub-nav styling
      $(this).addClass(activeCaseStudyNavItemSelector);
    });

    // On resize
    $(window).resize(function() {

      if ( $(caseStudyNavContainerCls).length ) {
        // Reset the sub-nav offset, for mobile, tablet & desktop
        subNavOffset = $(caseStudyNavContainerCls).offset().top;
        // Fix/un-fix the sub-nav menu
        alignSubNavBar();
      }
    });

    // On scroll
    $(window).scroll(function() {
      // Fix/un-fix the sub-nav menu
      alignSubNavBar();
      // TODO: Adjust the sub-nav item styling (ie when scrolled into view?)
    });
  }

  /**
   * Checks to see whether the sub-nav menu bar should be fixed or not
   */
  function alignSubNavBar() {
    const scrollDifference = checkScrollDifference(scrollBuffer, subNavOffset);
    if (scrollDifference >= 0) {
      $(caseStudyNavContainerCls).addClass(fixedCaseStudyNavContainerCls);
    } else {
      $(caseStudyNavContainerCls).removeClass(fixedCaseStudyNavContainerCls);
    }
  }

  /**
   * Check the distance scrolled against the top of an element
   * Returns the difference (px) between the top of the element and the top of the viewport
   */
  function checkScrollDifference(offsetBuffer = 0, elementOffset = 0) {
    // Scroll from top of page
    var scrollTop = $(window).scrollTop();
    // Calculated different between scroll from top, offset buffer (header bar), and element offset from top of page
    return ((scrollTop + offsetBuffer) - elementOffset);
  }

});
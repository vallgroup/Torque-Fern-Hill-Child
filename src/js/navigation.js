// Navigation JS
jQuery(document).ready(function($) {

  // Define general page variables
	const is_root = location.pathname == '/';
  const currPage = window.location.pathname;
  // Case Study variables
  const isCaseStudy = currPage.indexOf("/case-study/") > -1;
  const caseStudyNavContainerCls = '.case-study-sub-nav-container';
  const fixedCaseStudyNavContainerCls = 'fixed-nav';
  const caseStudyNavItemSelector = '.case-study-sub-nav-container .sub-nav-item';
  const activeCaseStudyNavItemSelector = 'active';
  let subNavOffset = $(caseStudyNavContainerCls).length ? $(caseStudyNavContainerCls).offset().top : 0; // offset of sub-nav, from top of screen
  const scrollBuffer = $('header').outerHeight(); // height of header, used to calculate whether user scrolled past certain point

  // All Pages
  // stop page jumping around if parent menu link href is '#'
  $('.torque-menu-item-wrapper.parent > a').click(function(e){
    if ($(this).attr('href') === '#') {
      // prevent default
      e.preventDefault();
      // if open, close it
      // if ($(this).find('.torque-menu-item-children-wrapper').css('visibility') === 'visible') {
      //   $(this).find('.torque-menu-item-children-wrapper').css({
      //     'visibility': 'hidden',
      //     'opacity': '0'
      //   });
      // }
    }
  });
  // On scroll
  // $(window).scroll(function(){};

  // Case Study Pages
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
      // Reset the sub-nav offset, for mobile, tablet & desktop
      subNavOffset = $(caseStudyNavContainerCls).offset().top;
      // Fix/un-fix the sub-nav menu
      alignSubNavBar();
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
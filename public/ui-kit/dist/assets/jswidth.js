
function checkBreakpoint() {
    const width = window.innerWidth;

    let activeBreakpoint = '';

    if (width >= 1536) {
      activeBreakpoint = '2xl (1536px and up)';
    } else if (width >= 1280) {
      activeBreakpoint = 'xl (1280px and up)';
    } else if (width >= 1024) {
      activeBreakpoint = 'lg (1024px and up)';
    } else if (width >= 768) {
      activeBreakpoint = 'md (768px and up)';
    } else if (width >= 640) {
      activeBreakpoint = 'sm (640px and up)';
    } else {
      activeBreakpoint = 'Below sm (sm breakpoint)';
    }

    console.log(`Current Breakpoint: ${activeBreakpoint}`);
  }

  checkBreakpoint();

  window.addEventListener('resize', checkBreakpoint);

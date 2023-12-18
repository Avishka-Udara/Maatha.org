window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollToTopButton").style.display = "block";
    } else {
        document.getElementById("scrollToTopButton").style.display = "none";
    }
}

document.getElementById("scrollToTopButton").addEventListener("click", function () {
    // Set the target scroll position to the top of the page
    const targetScrollPosition = 0;

    // Get the current scroll position
    const currentScrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

    // Calculate the distance to scroll
    const distanceToScroll = targetScrollPosition - currentScrollPosition;

    // Define the duration of the animation in milliseconds
    const animationDuration = 800; // Adjust this value to control the animation speed

    // Define the start time of the animation
    const startTime = performance.now();

    // Define the animation function
    function scrollToTop(timestamp) {
        const elapsedTime = timestamp - startTime;
        const progress = Math.min(elapsedTime / animationDuration, 1);
        const easeInOutCubic = t => t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
        const easedProgress = easeInOutCubic(progress);

        // Calculate the new scroll position based on the eased progress
        const newScrollPosition = currentScrollPosition + distanceToScroll * easedProgress;

        // Scroll to the new position
        window.scrollTo(0, newScrollPosition);

        // Continue the animation if not finished
        if (progress < 1) {
            requestAnimationFrame(scrollToTop);
        }
    }

    // Start the animation
    requestAnimationFrame(scrollToTop);
});


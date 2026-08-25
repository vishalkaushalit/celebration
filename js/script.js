// Counter JS
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        const target = +counter.dataset.target;
        const suffix = counter.dataset.suffix || "+";

        let count = 0;
        const increment = target / 100;

        const updateCounter = () => {
            if (count < target) {
                count += increment;
                counter.textContent = Math.ceil(count) + suffix;
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + suffix;
            }
        };

        updateCounter();
    });
});

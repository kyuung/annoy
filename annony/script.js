document.addEventListener("DOMContentLoaded", function () {
  var loadingProgress = document.getElementById('loading-progress');
  var loadingText = document.getElementById('loading-text');
  var loadingGif = document.getElementById('loading-gif');

  function updateLoading(progress) {
    loadingProgress.style.width = progress + '%';
    loadingText.textContent = Math.floor(progress) + '%';

    if (progress >= 99) {
      // Display the gif when progress is 99% or more
      if (loadingGif.classList.contains('hidden')) {
        loadingGif.classList.remove('hidden');

        // Hide the gif after 30 seconds
        setTimeout(function () {
          loadingGif.classList.add('hidden');

          // Continue loading from 99.1% to 100% after another 10 seconds
          simulateLoading(99.1, 100, 10);
        }, 30000);
      }
    }
  }

  function simulateLoading(start, end, duration) {
    var progress = start;
    var interval = setInterval(function () {
      progress += 0.1;
      updateLoading(progress);

      if (progress >= end) {
        clearInterval(interval);
      }
    }, (duration * 1000) / (end - start)); // Adjust the interval based on the specified duration in seconds
  }

  // Initial loading from 1% to 99% with 0 duration
  simulateLoading(1, 99, 0);
});


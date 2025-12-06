document.getElementById('video_url').addEventListener('input', function() {
        const videoUrl = this.value; // Get the YouTube URL from the input field
        const videoPreview = document.getElementById('videoPreview'); // Get the iframe element

        if (videoUrl) {
            // Extract YouTube video ID from the URL
            const videoId = extractYouTubeID(videoUrl);
            if (videoId) {
                // Set the iframe src to embed the YouTube video
                videoPreview.src = `https://www.youtube.com/embed/${videoId}`;
                videoPreview.style.display = 'block';
            } else {
                alert('Invalid YouTube URL');
                videoPreview.style.display = 'none';
                videoPreview.src = '';
            }
        } else {
            // Hide the iframe if the input is empty
            videoPreview.style.display = 'none';
            videoPreview.src = '';
        }
    });

    // Function to extract YouTube video ID from URL
    function extractYouTubeID(url) {
        const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
        const match = url.match(regex);
        return match ? match[1] : null;
    }
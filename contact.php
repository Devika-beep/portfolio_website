<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card animate__animated animate__fadeIn p-4 shadow-lg" style="width: 400px;">
        <h3 class="text-center mb-3">Contact Me</h3>
        <form id="contactForm">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="3" placeholder="Your message..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
        <button onclick="toggleDark()" class="btn btn-secondary mt-3 w-100">Toggle Mode</button>
        <div id="responseMsg" class="mt-3 text-center"></div>
    </div>
</div>
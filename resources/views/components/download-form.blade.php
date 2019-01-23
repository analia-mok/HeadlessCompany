<div class="download-form">
    <h3 class="download-form__title">{{ $slot }}</h3>
    <form method="POST" action="#">
        @csrf
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Phone">
        <input type="text" name="company" placeholder="Company">
        <select name="job_title" id="job_function" class="dropdown">
            <option value>Job Function</option>
            <option value="businessex">Business Executive</option>
            <option value="marketing">Marketing</option>
            <option value="it">Technology/ IT</option>
            <option value="developer">Developer</option>
        </select>
        <input type="submit" value="Download Now" class="button" disabled>
    </form>
</div>
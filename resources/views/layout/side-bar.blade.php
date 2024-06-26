<div class="navigation" style="height: 100vh; /* Set the height as needed */
    overflow-y: auto;
    position: fixed;
    left: 0;
    top: 0;">
    <ul style="padding-top: 10px;">
        <li>
            <a href="#">
                        <span class="icon" style="background-color: white; display: flex; justify-content: center; align-items: center; border-radius: 100%;">
                            <img src="{{ asset('imgs/logo.svg') }}" alt="" width="50">
                        </span>
                <span class="title">EVENTO</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'home' ? 'black_hover': '' }}">
            <a href="{{ route('main') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'Be an organizer' ? 'black_hover': '' }}">
            <a href="{{ route('subscribe') }}">
                        <span class="icon">
                            <ion-icon name="cube-outline"></ion-icon>
                        </span>
                <span class="title">Be an organizer</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'Manage events' ? 'black_hover': '' }}">
            <a href="{{ route('manage-events') }}" class="">
                        <span class="icon">
                            <ion-icon name="sparkles-outline"></ion-icon>
                        </span>
                <span class="title">Manage events</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'Reservations' ? 'black_hover': '' }}">
            <a href="#">
                        <span class="icon">
                            <ion-icon name="analytics-outline"></ion-icon>
                        </span>
                <span class="title">Reservations</span>
            </a>
        </li>
        <li class="{{ $black_hover == 'Manage categories' ? 'black_hover': '' }}">
            <a href="{{ route('manage-categories') }}">
                        <span class="icon">
                            <ion-icon name="layers-outline"></ion-icon>
                        </span>
                <span class="title">Manage categories</span>
            </a>
        </li>
        <li class="{{ $black_hover == 'Accept Events' ? 'black_hover': '' }}">
            <a href="{{ route('accept-events') }}">
                        <span class="icon">
                            <ion-icon name="hourglass-outline"></ion-icon>
                        </span>
                <span class="title">Accept Events</span>
            </a>
        </li>
        <li class="{{ $black_hover == 'Manage users' ? 'black_hover': '' }}">
            <a href="{{ route('manage-users') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                <span class="title">Manage users</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'Profile' ? 'black_hover': '' }}">
            <a href="{{ route('profile.edit') }}">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                <span class="title">Profile</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'Sign Out' ? 'black_hover': '' }}">
            <a href="#">
                        <form action="{{ 'logout' }}" method="POST" class="icon">
                            @csrf
                            <button type="submit">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </button>
                        </form>
                <span class="title">Sign Out</span>
            </a>
        </li>

        <li>
            <ion-icon class="toggle text-white" name="chevron-back-outline"></ion-icon>
        </li>
    </ul>
</div>

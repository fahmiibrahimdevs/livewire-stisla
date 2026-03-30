<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Livewire Stisla</title>

    <link rel="stylesheet" href="https://assets.fahmiibrahim.my.id/css/all.min.css">
    <script src="{{ asset('assets/midragon/js/sweetalert2@11.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>

<body class="tw-bg-white sm:tw-bg-slate-50 tw-min-h-screen tw-flex tw-items-center tw-justify-center">
    <div id="app" class="tw-w-full tw-max-w-[480px] sm:tw-p-4 sm:tw-mt-10 sm:tw-mb-10">
        @if ($errors->any())
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Failed!',
                    html: `
                        <ul class="tw-text-left">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    `,
                });
            </script>
        @endif

        <div class="tw-bg-white tw-rounded-none sm:tw-rounded-2xl tw-shadow-none sm:tw-shadow-[0_4px_25px_rgba(0,0,0,0.05)] tw-p-8 sm:tw-p-10">
            <div class="tw-flex tw-flex-col tw-items-center tw-mb-8">
                <div class="tw-w-16 tw-h-16 tw-bg-[#1b3181] tw-rounded-2xl tw-flex tw-items-center tw-justify-center tw-mb-4 tw-shadow-sm">
                    <i class="fas fa-book-open tw-text-white tw-text-2xl"></i>
                </div>
                <h1 class="tw-text-xl tw-font-bold tw-text-slate-800 tw-mb-1">Livewire Stisla</h1>
                <p class="tw-text-sm tw-text-slate-500 tw-font-medium tw-text-center">Starter Template Laravel Livewire
                </p>

                <h2 class="tw-text-2xl tw-font-bold tw-text-slate-800 tw-mt-8 tw-mb-2">Daftar Akun</h2>
                <p class="tw-text-sm tw-text-slate-500 tw-font-medium tw-text-center">Buat akun Anda untuk melanjutkan
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="tw-space-y-5">
                @csrf
                <div class="tw-flex tw-flex-col">
                    <label for="name"
                        class="tw-mb-1.5 tw-text-sm tw-font-semibold tw-text-slate-600 tw-text-left">Nama
                        Lengkap</label>
                    <input id="name" type="text" name="name" required autofocus
                        class="tw-w-full tw-px-4 tw-py-3 tw-text-sm tw-text-slate-700 tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg focus:tw-outline-none focus:tw-border-[#1b3181] focus:tw-ring-1 focus:tw-ring-[#1b3181] tw-transition-colors">
                </div>

                <div class="tw-flex tw-flex-col">
                    <label for="email"
                        class="tw-mb-1.5 tw-text-sm tw-font-semibold tw-text-slate-600 tw-text-left">Email</label>
                    <input id="email" type="email" name="email" required
                        class="tw-w-full tw-px-4 tw-py-3 tw-text-sm tw-text-slate-700 tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg focus:tw-outline-none focus:tw-border-[#1b3181] focus:tw-ring-1 focus:tw-ring-[#1b3181] tw-transition-colors"
                        placeholder="emailanda@stu.pnj.ac.id">
                </div>

                <div class="tw-flex tw-flex-col">
                    <label for="password"
                        class="tw-mb-1.5 tw-text-sm tw-font-semibold tw-text-slate-600 tw-text-left">Password</label>
                    <div class="tw-relative">
                        <input id="password" type="password" name="password" required
                            class="tw-w-full tw-px-4 tw-py-3 tw-text-sm tw-text-slate-700 tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg focus:tw-outline-none focus:tw-border-[#1b3181] focus:tw-ring-1 focus:tw-ring-[#1b3181] tw-transition-colors tw-pr-10">
                        <button type="button"
                            class="tw-absolute tw-right-4 tw-top-1/2 tw-transform -tw-translate-y-1/2 tw-text-slate-400 hover:tw-text-slate-600"
                            onclick="const p = document.getElementById('password'); p.type = p.type === 'password' ? 'text' : 'password';">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="tw-flex tw-flex-col">
                    <label for="password_confirmation"
                        class="tw-mb-1.5 tw-text-sm tw-font-semibold tw-text-slate-600 tw-text-left">Konfirmasi
                        Password</label>
                    <div class="tw-relative">
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            class="tw-w-full tw-px-4 tw-py-3 tw-text-sm tw-text-slate-700 tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg focus:tw-outline-none focus:tw-border-[#1b3181] focus:tw-ring-1 focus:tw-ring-[#1b3181] tw-transition-colors tw-pr-10">
                        <button type="button"
                            class="tw-absolute tw-right-4 tw-top-1/2 tw-transform -tw-translate-y-1/2 tw-text-slate-400 hover:tw-text-slate-600"
                            onclick="const p = document.getElementById('password_confirmation'); p.type = p.type === 'password' ? 'text' : 'password';">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="tw-flex tw-flex-col">
                    <label for="role_user"
                        class="tw-mb-1.5 tw-text-sm tw-font-semibold tw-text-slate-600 tw-text-left">Role
                        User</label>
                    <select id="role_user" name="role_id" required
                        class="tw-w-full tw-px-4 tw-py-3 tw-text-sm tw-text-slate-700 tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg focus:tw-outline-none focus:tw-border-[#1b3181] focus:tw-ring-1 focus:tw-ring-[#1b3181] tw-transition-colors">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <div class="tw-pt-4">
                    <button type="submit"
                        class="tw-w-full tw-flex tw-justify-center tw-items-center tw-py-3 tw-px-4 tw-border tw-border-transparent tw-rounded-lg tw-text-sm tw-font-semibold tw-text-white tw-bg-[#1e3a8a] hover:tw-bg-blue-900 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-2 focus:tw-ring-[#1e3a8a] tw-transition-colors">
                        Daftar
                    </button>
                </div>
            </form>

            <div class="tw-mt-8 tw-text-center">
                <p class="tw-text-sm tw-text-slate-500 tw-font-medium">
                    Sudah punya akun? <a href="{{ route('login') }}"
                        class="tw-text-[#2b6cb0] hover:tw-text-blue-700 hover:tw-underline tw-font-semibold">Sign
                        In</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>

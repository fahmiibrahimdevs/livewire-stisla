<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Livewire Stisla</title>

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
    <div id="app" class="tw-w-full tw-max-w-[480px] sm:tw-p-4">
        @if (session('success'))
            <script>
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        @if (session('error'))
            <script>
                Swal.fire({
                    title: 'Failed!',
                    text: "{{ session('error') }}",
                    icon: 'warning',
                    confirmButtonText: 'Try Again'
                });
            </script>
        @endif

        <div class="tw-bg-white tw-rounded-none sm:tw-rounded-2xl tw-shadow-none sm:tw-shadow-[0_4px_25px_rgba(0,0,0,0.05)] tw-p-8 sm:tw-p-10">
            <div class="tw-flex tw-flex-col tw-items-center tw-mb-8">
                <div class="tw-w-16 tw-h-16 tw-bg-[#1b3181] tw-rounded-2xl tw-flex tw-items-center tw-justify-center tw-mb-4 tw-shadow-sm">
                    <i class="fas fa-book-open tw-text-white tw-text-2xl"></i>
                </div>
                <h1 class="tw-text-xl tw-font-bold tw-text-slate-800 tw-mb-1">Livewire Stisla</h1>
                <p class="tw-text-xs tw-text-slate-500 tw-font-medium tw-text-center">Starter Template Laravel Livewire
                </p>

                <h2 class="tw-text-2xl tw-font-bold tw-text-slate-800 tw-mt-6 tw-mb-2">Selamat Datang</h2>
                <p class="tw-text-xs tw-text-slate-500 tw-font-medium tw-text-center">Masuk ke akun Anda untuk
                    melanjutkan</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="tw-space-y-5">
                @csrf
                <div class="tw-flex tw-flex-col">
                    <label for="email" class="tw-mb-1.5 tw-text-sm tw-font-semibold tw-text-slate-600 tw-text-left">Email</label>
                    <input id="email" type="email" name="email" tabindex="1" required autofocus
                        class="tw-w-full tw-px-4 tw-py-3 tw-text-sm tw-text-slate-700 tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg focus:tw-outline-none focus:tw-border-[#1b3181] focus:tw-ring-1 focus:tw-ring-[#1b3181] tw-transition-colors"
                        placeholder="emailanda@stu.pnj.ac.id">
                </div>

                <div class="tw-flex tw-flex-col">
                    <label for="password" class="tw-mb-1.5 tw-text-sm tw-font-semibold tw-text-slate-600 tw-text-left">Password</label>
                    <div class="tw-relative">
                        <input id="password" type="password" name="password" tabindex="2" required
                            class="tw-w-full tw-px-4 tw-py-3 tw-text-sm tw-text-slate-700 tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg focus:tw-outline-none focus:tw-border-[#1b3181] focus:tw-ring-1 focus:tw-ring-[#1b3181] tw-transition-colors tw-pr-10">
                        <button type="button" class="tw-absolute tw-right-4 tw-top-1/2 tw-transform -tw-translate-y-1/2 tw-text-slate-400 hover:tw-text-slate-600" onclick="const p = document.getElementById('password'); p.type = p.type === 'password' ? 'text' : 'password';">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="tw-flex tw-items-center tw-pt-1">
                    <input id="remember-me" name="remember" type="checkbox" tabindex="3"
                        class="tw-w-4 tw-h-4 tw-text-[#1b3181] tw-bg-white tw-border-slate-300 tw-rounded focus:tw-ring-[#1b3181]">
                    <label for="remember-me" class="tw-ml-2 tw-block tw-text-sm tw-text-slate-500 tw-font-medium">
                        Ingat saya di perangkat ini
                    </label>
                </div>

                <div class="tw-pt-4">
                    <button type="submit" tabindex="4"
                        class="tw-w-full tw-flex tw-justify-center tw-items-center tw-py-3 tw-px-4 tw-border tw-border-transparent tw-rounded-lg tw-text-sm tw-font-semibold tw-text-white tw-bg-[#1e3a8a] hover:tw-bg-blue-900 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-2 focus:tw-ring-[#1e3a8a] tw-transition-colors">
                        Masuk
                    </button>
                </div>
            </form>

            <div class="tw-mt-8 tw-text-center">
                <p class="tw-text-sm tw-text-slate-500 tw-font-medium">
                    Belum punya akun? <a href="{{ route('register') }}" class="tw-text-[#2b6cb0] hover:tw-text-blue-700 hover:tw-underline tw-font-semibold">Daftar</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>

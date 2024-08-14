<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<style>
    .header-aja {
        background-color: #343a40;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .header-aja .navbar {
        background: transparent;
        padding-top: .75rem;
        padding-bottom: .75rem;
        color: #fff;
        border-radius: 0;
        box-shadow: none;
        border: none;
    }

    @media (min-width:768px) {
        .header-aja .navbar {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
    }

    .header-aja .navbar .navbar-brand {
        font-weight: bold;
        color: inherit;
    }

    .batas-atas {
        padding-top: 50px;
    }

    .table-wrapper {
        max-height: 550px;
        max-width: 1500px;
        overflow-y: auto;
        margin-right: 10%;
    }

    .batas-samping {
        padding-right: 50px;
        padding-left: 50px;
    }
</style>
<body>
    <div class="header-aja">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#">Dinas Pendidikan</a><button
                    class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle
                        navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false" href="#">Halaman</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="/sekolah">Sekolah</a>
                                {{-- <a class="dropdown-item" role="presentation" href="../alat">Alat</a>
                                <a class="dropdown-item" role="presentation" href="../angkutan">Angkutan</a>
                                <a class="dropdown-item" role="presentation" href="../bangunan">Bangunan</a>
                                <a class="dropdown-item" role="presentation" href="../buku">Buku</a>
                                <a class="dropdown-item" role="presentation" href="../peserta_didik">Peserta Didik</a>
                                <a class="dropdown-item" role="presentation" href="../ptk">PTK</a>
                                <a class="dropdown-item" role="presentation" href="../ptk_terdaftar">PTK Terdaftar</a>
                                <a class="dropdown-item" role="presentation" href="../rombongan_belajar">Rombongan Belajar</a>
                                <a class="dropdown-item" role="presentation" href="../ruang">Ruang</a>
                                <a class="dropdown-item" role="presentation" href="../sanitasi">Sanitasi</a>
                                <a class="dropdown-item" role="presentation" href="../sekolah">Sekolah</a>
                                <a class="dropdown-item" role="presentation" href="../tanah">Tanah</a>
								<a class="dropdown-item" role="presentation" href="#">User</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Access Menu</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Login Sessions</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Notifikasi</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Role</a>
                                    <a class="dropdown-item" role="presentation" href="#">User Sub Menu</a>
                                <a class="dropdown-item" role="presentation" href="../zref_jenis_ptk">Zref Jenis PTK</a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
</body>
</html>
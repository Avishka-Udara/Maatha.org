<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maatha World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @livewire('headercss')
</head>

<body>

    @livewire('gestnav')
    <div class="site-wrap">


        <div class="site-blocks-cover overlay"
            style="background-image: url({{ asset('assets/images/ray-reyes-3xwrg7Vv6Ts-unsplash.jpg') }});" data-aos="fade" 
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="text-center row align-items-center justify-content-center">

                    <div class="col-md-10">

                        <div class="mb-4 row justify-content-center">
                            <div class="text-center col-md-10">
                                <h1 data-aos="fade-up">{{ __('accounting.Accounting')}}</h1>
                                <span class="typed-words h1"></span>
                                <br><br>
                                <p data-aos="fade-up" data-aos-delay="100"><a href="#table"
                                        class="btn btn-primary btn-pill">{{ __('accounting.Inqury')}}</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="site-section">
            <div class="container">
            @if (count($accounts) > 0)
                <div class="row" id="table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ __('accounting.Date')}}</th>
                                <th>{{ __('accounting.Income')}}</th>
                                <th>{{ __('accounting.Expenses')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalIncome = 0;
                                $totalExpenses = 0;
                            @endphp

                            @foreach ($accounts as $account)
                                <tr>
                                    <td>{{ $account->created_at }}</td>
                                    @if ($account->type === 'income')
                                        <td class="text-right">
                                            <a href="{{ route('Accountability.guestshow', $account->id) }}" style="color: #009491;">
                                                {{ $account->amount }}
                                            </a>
                                        </td>
                                        <td></td>
                                        @php
                                            $totalIncome += $account->amount;
                                        @endphp
                                    @else
                                        <td></td>
                                        <td class="text-right">
                                            <a href="{{ route('Accountability.guestshow', $account->id) }}" style="color: #940200">
                                                {{ $account->amount }}
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $accounts->currentPage() == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $accounts->previousPageUrl() }}" tabindex="-1" aria-disabled="true">{{ __('accounting.Previous')}}</a>
                            </li>
                            @for ($i = 1; $i <= $accounts->lastPage(); $i++)
                                <li class="page-item {{ $accounts->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $accounts->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item {{ $accounts->currentPage() == $accounts->lastPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $accounts->nextPageUrl() }}">{{ __('accounting.Next')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                @else
                    <div class="alert alert-danger" role="alert">
                        No Account Details available.
                    </div>
                @endif
            </div>
        </div>

    </div>
    @livewire('footer')
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

    @livewire('scripts')
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["{{ __('accounting.typedwords01')}}", "{{ __('accounting.typedwords02')}}", "{{ __('accounting.typedwords03')}}", "{{ __('accounting.typedwords04')}}"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
        });
    </script>

</body>

</html>

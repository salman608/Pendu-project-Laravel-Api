<div class="pagination_section mt-3">
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end" style="margin:20px 0">
        <li class="page-item">
            <a class="page-link" href="" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @if ($paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link left_icon_pagi" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">
                    <i class="fas fa-chevron-left"></i>

                </a>
            </li>
        @endif

        @foreach ($elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif
                {{-- <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
            @endforeach
        @endif
        @endforeach
            {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link left_icon_pagi" href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">
                <i class="fas fa-chevron-right"></i>

            </a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link left_icon_pagi" href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">
                <i class="fas fa-chevron-right"></i>

            </a>
        </li>
        @endif

    </ul>
    </nav>
</div>


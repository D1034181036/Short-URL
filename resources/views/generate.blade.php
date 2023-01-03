@extends('layout')

@section('content')
            <div class="input-group input-group-lg">
                <input id="short_url" type="text" class="form-control text-center" value="{{ $short_url }}" readonly>
                <button class="btn btn-primary btn-clipboard-copy" data-clipboard-target="#short_url" data-bs-toggle="tooltip">複製</button>
            </div>
            
            <script src="{{ url('assets/clipboard.min.js') }}"></script>

            <script>
                // Initialize Tooltip
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                
                const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl, {
                        trigger: 'manual',
                        placement: 'bottom',
                    });
                });

                // Initialize Clipboard
                const clipboard = new ClipboardJS('.btn-clipboard-copy');

                clipboard.on('success', function(e) {
                    $(e.trigger).tooltip('hide').attr('data-bs-original-title', 'Copied!').tooltip('show');
                    setTimeout(function() { $(e.trigger).tooltip('hide'); }, 1000);
                });

                clipboard.on('error', function(e) {
                    $(e.trigger).tooltip('hide').attr('data-bs-original-title', 'Failed!').tooltip('show');
                    setTimeout(function() { $(e.trigger).tooltip('hide'); }, 1000);
                });
            </script>
@endsection
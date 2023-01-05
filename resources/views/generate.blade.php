@extends('layout')

@section('content')
            <div class="input-group input-group-lg">
                <input id="short_url" type="text" class="form-control text-center" value="{{ $short_url }}" readonly>
                <button class="btn btn-primary" data-clipboard-target="#short_url" data-bs-toggle="tooltip">複製</button>
            </div>
            
            <script src="{{ url('assets/clipboard.min.js') }}"></script>

            <script>
                // Usage:

                // Example 1:
                // <input id="url" type="text" value="http://example.com" readonly>
                // <button data-clipboard-target="#url" data-bs-toggle="tooltip">Copy</button>

                // Example 2:
                // <button data-clipboard-text="hello world" data-bs-toggle="tooltip">Copy</button>

                function clipboardWithTooltip(target = '[data-bs-toggle="tooltip"]', tooltipText = 'Copied!'){
                    // Initialize Tooltip
                    const tooltipTriggerList = [].slice.call(document.querySelectorAll(target));
                    
                    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl, {
                            trigger: 'manual',
                            placement: 'bottom',
                        });
                    });

                    // Initialize Clipboard
                    const clipboard = new ClipboardJS(target);

                    clipboard.on('success', function(e) {
                        $(e.trigger).tooltip('hide').attr('data-bs-original-title', tooltipText).tooltip('show');
                        setTimeout(function() { $(e.trigger).tooltip('hide'); }, 1000);
                    });

                    clipboard.on('error', function(e) {
                        $(e.trigger).tooltip('hide').attr('data-bs-original-title', 'Failed!').tooltip('show');
                        setTimeout(function() { $(e.trigger).tooltip('hide'); }, 1000);
                    });
                }

                clipboardWithTooltip(target = '[data-bs-toggle="tooltip"]', text = 'Copied!');
            </script>
@endsection
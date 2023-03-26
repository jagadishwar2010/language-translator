<!DOCTYPE html>
<html>
<head>
    <title>Language Translation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .container {
            /*margin-top: 50px;*/
        }

        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Language Translation</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="source-text">Source Text</label>
                        <textarea id="source-text" name="source_text" class="form-control" rows="5" placeholder="Enter text to translate"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="target-language">Target Language</label>
                        <select id="target-language" name="target_language" class="form-control">
                            <option value="de">German</option>
                            <option value="fr">French</option>
                            <option value="es">Spanish</option>
                            <option value="it">Italian</option>
                            <option value="pt">Portuguese</option>
                            <option value="ja">Japanese</option>
                            <option value="zh">Chinese</option>
                        </select>
                    </div>

                    <button id="translate-btn" type="button" class="btn btn-primary">Translate</button>

                    <div class="form-group mt-3">
                        <label for="translated-text">Translated Text</label>
                        <textarea id="translated-text" name="translated_text" class="form-control" rows="5" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#translate-btn').click(function() {
            var sourceText = $('#source-text').val().trim();
            var targetLanguage = $('#target-language').val();

            if (sourceText.length == 0) {
                alert('Please enter some text to translate.');
                return;
            }

            $('#translate-btn').prop('disabled', true);
            $('#translated-text').val('');

            $.ajax({
                type: 'POST',
                url: '{{ route("translate") }}',
                data: {
                    'source_text': sourceText,
                    'target_language': targetLanguage,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#translated-text').val(response);
                },
                error: function(error) {
                    alert('Error occurred while translating text: ' + error.responseText);
                },
                complete: function() {
                    $('#translate-btn').prop('disabled', false);
                }
            });
        });
    });
</script>

</body>
</html>

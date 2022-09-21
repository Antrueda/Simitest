<?php

// formatear valores decimales a maximo 2
\Blade::directive('convert2', function ($value) {
    return "<?php echo number_format($value,0); ?>";
});

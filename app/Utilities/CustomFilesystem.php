<?php

namespace App\Utilities;

use Illuminate\Filesystem\Filesystem;

class CustomFilesystem extends Filesystem
{
    public function link($target, $link)
    {
        if (!windows_os()) {
            return symlink($target, $link);
        }

        // Implementasi alternatif untuk lingkungan Windows, misalnya dengan copy.
        // Ganti dengan kode yang sesuai untuk kebutuhan Anda.
        $this->copy($target, $link);
        return true;
    }
}

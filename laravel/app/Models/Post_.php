<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            'title' => 'The Importance of Properly Deleting Files from GitHub',
            "slug" => "the-importance-deleting-properly",
            'author' => 'Sony Tri Prasetyo',
            'body' => "GitHub is a popular platform for managing code and files, allowing users to easily collaborate and share their work with others. However, it's important to understand how to properly delete files from GitHub to avoid potential problems down the line.
    
            To delete a file in GitHub, there are a few steps you need to follow. First, navigate to the repository where the file is located. Then, find the file you want to delete and click on it to open it. Once the file is open, click on the trash can icon (Delete this file) in the upper right corner of the screen.
            
            After this, a dialog box will appear asking for confirmation to delete the file. Verify that you have selected the correct file and click on 'Commit Changes' to delete the file. However, it's important to note that deleting a file from GitHub does not necessarily delete it from your local computer. You will need to manually delete the file from your local repository to ensure it is completely removed from your system.
            
            Properly deleting files from GitHub is crucial to ensure that your code and projects stay organized and up-to-date. It also ensures that there are no unnecessary files taking up space or causing bugs in your work. By following the simple steps mentioned above, you can easily delete files from GitHub and keep your projects running smoothly."
        ],
        [
            "title" => " Common Mistakes to Avoid When Deleting Files from GitHub",
            "slug" => "common-mistakes-when-delete-files",
            "author" => "Jesselyn Bundle",
            "body" => "While deleting files from GitHub is a straightforward process, there are a few common mistakes that users can make that may cause issues down the line.
    
            One of the most common mistakes is accidentally deleting the wrong file. This can easily be avoided by carefully reviewing the file you want to delete before clicking on the trash can icon. Make sure that you have selected the correct file and that you actually want to delete it before committing to the action.
            
            Another mistake is forgetting to delete the file from your local repository. Although deleting a file from GitHub removes it from the online platform, it does not delete it from your local computer. If you forget to delete the file from your local repository, it can cause confusion and potential conflicts in the future.
            
            Finally, some users may delete files without properly committing the changes. It's important to make sure that you click on 'Commit Changes' after deleting a file to ensure that the deletion is properly saved and recorded.
            
            By avoiding these common mistakes and taking the time to properly delete files from GitHub, you can ensure that your projects run smoothly and are free of unnecessary clutter and errors."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts); // mengubah array menjadi collect array
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts; self untuk property static
        $posts = static::all(); // static untuk method static, $this untuk method bukan static

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        // dengan collect array kita bisa menerapkan firstWhere() sebagai pengganti looping secara manual yang akan mengembalikan data pertama dengan kondisi tertentu
        return $posts->firstWhere('slug', $slug);
    }
}

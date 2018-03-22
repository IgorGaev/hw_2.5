<?php
class News
{
    public $newsBase;
    public $newsData;
    public $newsTitle;
    public $newsText;
    public $newsAuthor;
    public $newsItem;

    public function __construct($Base)
    {
        $this->newsBase = $Base;
    }


    public function displayNews()
    {
        foreach ($this->newsBase as $this->newsItem) :
            $this->newsData = $this->newsItem['data'];
            $this->newsTitle = $this->newsItem['title'];
            $this->newsText = $this->newsItem['text'];
            $this->newsAuthor = $this->newsItem['author'];

            ?>

            <table>
                <tr>
                    <td><?=$this->newsData?></td>
                </tr>
                <tr>
                    <td><?=$this->newsTitle?></td>
                </tr>
                <tr>
                    <td><?=$this->newsText?></td>
                </tr>
                <tr>
                    <td><?=$this->newsAuthor?></td>
                </tr>
            </table>
            <br>

        <?php endforeach;
    }
}
?>
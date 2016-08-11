> These files are to support [a question on StackOverflow][7]

Why is [this XML][1] still validating when [changing the integer][2] from `id="123456"` to `id="asdf"` ?

I'm totally new to RELAXNG, but I expect [this part of the vendor-provided schema][3] to invalidate it:

<!-- lang:xml -->

    <r:attribute name="id">
          <r:data type="integer"/>
    </r:attribute>

But no matter how I tamper with the XML, [`DOMDocument::relaxNGValidate`][4] always returns true.

    <?php
    $valid = new DOMDocument;
    $valid->load('valid.xml');
    var_dump($valid->relaxNGValidate('relaxng.xml'));
    
    $invalid = new DOMDocument;
    $invalid->load('invalid.xml');
    var_dump($invalid->relaxNGValidate('relaxng.xml'));

  [1]: https://github.com/admonkey/validate-relaxng/blob/ebab1e7358e4343b4aeb6ff19ab6d12bc52b4bbf/valid.xml#L9
  [2]: https://github.com/admonkey/validate-relaxng/blob/ebab1e7358e4343b4aeb6ff19ab6d12bc52b4bbf/invalid.xml#L9
  [3]: https://github.com/admonkey/validate-relaxng/blob/ebab1e7358e4343b4aeb6ff19ab6d12bc52b4bbf/relaxng.xml#L88
  [4]: http://php.net/manual/en/domdocument.relaxngvalidate.php
  [5]: https://github.com/admonkey/validate-relaxng
  [6]: https://www.digitalmeasures.com/
  [7]:http://stackoverflow.com/q/38899917/4233593

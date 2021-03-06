<?hh

// WARNING: Contains some auto-generated boilerplate code, see:
// HHVM\UserDocumentation\MarkdownExt\ExtractedCodeBlocks\FilterBase::addBoilerplate

namespace HHVM\UserDocumentation\Guides\Hack\AsynchronousOperations\Awaitables\MultipleAwaitables;

use namespace HH\Lib\Dict;

async function quads(float $n): Awaitable<float> {
  return $n * 4.0;
}

<<__EntryPoint>>
async function quads_m(): Awaitable<void> {
  \init_docs_autoloader();

  $awaitables = dict['five' => quads(5.0), 'nine' => quads(9.0)];
  $results = await Dict\from_async($awaitables);

  \var_dump($results['five']); // float(20)
  \var_dump($results['nine']); // float(36)
}

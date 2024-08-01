use namespace HH\Lib\IO;

<<__EntryPoint>>
async function HelloWorld(): Awaitable<void> {
  await IO\request_output()->writeAllAsync("Hello World!\n");
}
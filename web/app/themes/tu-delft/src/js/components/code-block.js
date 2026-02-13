export function codeBlock() {
	window.hljs = hljs
	hljs.highlightAll()

	const blocks = document.querySelectorAll('pre code')
	blocks.forEach((block) => {
		hljs.lineNumbersBlock(block)
	})
}

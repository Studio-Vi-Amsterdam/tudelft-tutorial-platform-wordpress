import hljs from "highlight.js";

export async function highlightJSLoad() {
	return await import('highlight.js')
}
export async function highlightLineNumbersLoad() {
	return await import('highlightjs-line-numbers.js')
}

export function codeBlock() {
	highlightJSLoad().then(() => {
		window.hljs = hljs
		hljs.highlightAll()
		highlightLineNumbersLoad().then(() => {
			const blocks = document.querySelectorAll('pre code')
			blocks.forEach((block) => {
				hljs.lineNumbersBlock(block)
			})
		})
	})
}
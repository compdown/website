<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head', ['title' => 'Compdown'])
</head>

<body class="bg-zinc-50 text-zinc-900 antialiased" data-theme="compdown">
    <div class="relative overflow-hidden">
        <div class="pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(60%_45%_at_80%_10%,rgba(14,165,233,0.16),transparent_65%)]"></div>
        <div class="pointer-events-none absolute -top-24 right-[-10%] h-[420px] w-[420px] rounded-full bg-[radial-gradient(circle,rgba(251,191,36,0.35),transparent_70%)] blur-3xl">
        </div>
        <div
            class="pointer-events-none absolute bottom-[-18%] left-[-10%] h-[360px] w-[360px] rounded-full bg-[radial-gradient(circle,rgba(34,197,94,0.25),transparent_70%)] blur-3xl">
        </div>

        <header class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 pb-14 pt-10 sm:px-10">
            <div>
                <p class="text-base font-semibold">Compdown</p>
            </div>
            <div class="hidden items-center gap-6 text-base text-zinc-600 md:flex">
                <a class="hover:text-zinc-900" href="https://github.com/seblavoie/compdown" target="_blank" rel="noreferrer">GitHub</a>
                <a class="hover:text-zinc-900" href="https://github.com/seblavoie/compdown#features" target="_blank" rel="noreferrer">Features</a>
                <a class="hover:text-zinc-900" href="https://github.com/seblavoie/compdown#installation" target="_blank" rel="noreferrer">Install</a>
            </div>
            <a class="btn btn-primary" href="https://github.com/seblavoie/compdown" target="_blank" rel="noreferrer">Download</a>
        </header>

        <main class="mx-auto flex w-full max-w-7xl flex-col items-center gap-10 px-6 pb-28 text-center sm:px-10">
            <section class="space-y-8">
                <div class="space-y-6">
                    <h1 class="text-4xl font-semibold leading-tight text-zinc-900 sm:text-5xl lg:text-6xl">
                        A natural language for After Effects.
                    </h1>
                    <p class="mx-auto max-w-3xl text-lg leading-relaxed text-zinc-600 sm:text-xl">
                        Write a scene like a script. Keep it readable, shareable, and easy to update. Invite automation and AI into your workflow without sacrificing creative
                        control.
                    </p>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a class="btn btn-primary" href="https://github.com/seblavoie/compdown" target="_blank" rel="noreferrer">Download</a>
                    <a class="btn btn-secondary" href="https://github.com/seblavoie/compdown#minimal-example" target="_blank" rel="noreferrer">See a quick example</a>
                </div>
            </section>

            <section class="w-full">
                <div class="rounded-xl bg-gradient-to-b from-sky-200 to-blue-200 px-4 pt-16">
                    <img src="{{ asset('images/hero-image.png') }}" alt="Compdown hero" class="mx-auto h-[440px] w-full max-w-2xl rounded-t-lg object-cover object-top" />
                </div>
            </section>
        </main>
    </div>

    <section class="mx-auto w-full max-w-7xl px-6 pb-24 sm:px-10">
        <div class="grid gap-6 border-t border-zinc-200 pt-12 lg:grid-cols-3">
            <div class="space-y-3">
                <h3 class="text-xl font-semibold">Readable</h3>
                <p class="text-base leading-relaxed text-zinc-600">Elegant syntax that stays clean when you ship it across teams.</p>
            </div>
            <div class="space-y-3">
                <h3 class="text-xl font-semibold">Shareable</h3>
                <p class="text-base leading-relaxed text-zinc-600">Save it, gist it, email it, or drop it in a repo. Text travels well.</p>
            </div>
            <div class="space-y-3">
                <h3 class="text-xl font-semibold">Fast</h3>
                <p class="text-base leading-relaxed text-zinc-600">Copy, paste, process. Stay in After Effects and skip binary presets.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-6 pb-24 sm:px-10">
        <div class="grid gap-10 lg:grid-cols-[0.65fr_1.35fr]" data-code-tabs>
            <div class="space-y-6">
                <p class="font-mono text-base uppercase tracking-[0.28em] text-zinc-500">Markup examples</p>
                <h2 class="text-3xl font-semibold text-zinc-900">Start faster, work better.</h2>
                <p class="text-base leading-relaxed text-zinc-600">
                    From layers to keyframes, build scenes without jumping between panels.
                </p>
                <div class="mt-6 space-y-2">
                    <button class="block w-full border-l-2 border-transparent py-2.5 pl-4 text-left text-base font-semibold text-zinc-500 transition" type="button"
                        data-code-tab="layers" aria-selected="false">Layers</button>
                    <button class="block w-full border-l-2 border-transparent py-2.5 pl-4 text-left text-base font-semibold text-zinc-500 transition" type="button"
                        data-code-tab="comps" aria-selected="false">Compositions</button>
                    <button class="block w-full border-l-2 border-transparent py-2.5 pl-4 text-left text-base font-semibold text-zinc-500 transition" type="button"
                        data-code-tab="keyframes" aria-selected="false">Keyframes</button>
                    <button class="block w-full border-l-2 border-transparent py-2.5 pl-4 text-left text-base font-semibold text-zinc-500 transition" type="button"
                        data-code-tab="effects" aria-selected="false">Effects</button>
                </div>
            </div>
            <div class="code-block max-h-[460px] min-h-[360px] overflow-auto rounded-lg border border-zinc-200 bg-zinc-950/95 p-4 shadow-inner">
                <pre class="overflow-hidden text-base leading-relaxed" data-code-panel="layers"><code class="language-yaml">compositions:
  - name: My Comp
    layers:
      - name: background
        type: solid
        color: 1a1a2e
      - name: title
        type: text
        text: Hello World</code></pre>
                <pre class="hidden overflow-hidden text-base leading-relaxed" data-code-panel="comps"><code class="language-yaml">compositions:
  - name: Lower Third
    width: 1920
    height: 200
    duration: 5
  - name: Main Comp
    framerate: 30
    folder: Renders</code></pre>
                <pre class="hidden overflow-hidden text-base leading-relaxed" data-code-panel="keyframes"><code class="language-yaml">transform:
  rotation: 45
  position:
    - time: 0
      value: [0, 0]
    - time: 5
      value: [1920, 1080]</code></pre>
                <pre class="hidden overflow-hidden text-base leading-relaxed" data-code-panel="effects"><code class="language-yaml">effects:
  - name: Gaussian Blur
    properties:
      Blurriness: 10
      Repeat Edge Pixels: true</code></pre>
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-6 pb-24 sm:px-10">
        <div class="grid gap-10 border-t border-zinc-200 pt-12 lg:grid-cols-[0.65fr_1.35fr]" data-code-tabs>
            <div class="space-y-6">
                <p class="font-mono text-base uppercase tracking-[0.28em] text-zinc-500">Powerful workflows</p>
                <h2 class="text-3xl font-semibold text-zinc-900">Grows with your needs.</h2>
                <p class="text-base leading-relaxed text-zinc-600">
                    Nest comps, wire footage, and build reusable systems without leaving After Effects.
                </p>
                <div class="mt-6 space-y-2">
                    <button class="block w-full border-l-2 border-transparent py-2.5 pl-4 text-left text-base font-semibold text-zinc-500 transition" type="button"
                        data-code-tab="structure" aria-selected="false">Structure</button>
                    <button class="block w-full border-l-2 border-transparent py-2.5 pl-4 text-left text-base font-semibold text-zinc-500 transition" type="button"
                        data-code-tab="nesting" aria-selected="false">Comp Nesting</button>
                    <button class="block w-full border-l-2 border-transparent py-2.5 pl-4 text-left text-base font-semibold text-zinc-500 transition" type="button"
                        data-code-tab="full" aria-selected="false">Full Example</button>
                </div>
            </div>
            <div class="code-block max-h-[560px] min-h-[420px] overflow-auto rounded-lg border border-zinc-200 bg-zinc-950/95 p-4 shadow-inner">
                <pre class="overflow-hidden text-base leading-relaxed" data-code-panel="structure"><code class="language-yaml">folders:
  - name: Assets
  - name: Audio
    parent: Assets
  - name: Scenes
compositions:
  - name: Scene 1
    folder: Scenes</code></pre>
                <pre class="hidden overflow-hidden text-base leading-relaxed" data-code-panel="nesting"><code class="language-yaml">compositions:
  - name: Lower Third
    layers:
      - name: label
        type: text
        text: Breaking News
  - name: Main Comp
    layers:
      - name: lower third
        comp: Lower Third</code></pre>
                <pre class="hidden overflow-hidden text-base leading-relaxed" data-code-panel="full"><code class="language-yaml">folders:
  - Footage
  - Renders
  - Plates
    parent: Footage
files:
  - id: bg
    path: /path/to/background.png
  - id: seq
    path: /path/to/sequence/frame_[0001-0100].png
    sequence: true
compositions:
  - name: Lower Third
    width: 1920
    height: 200
    duration: 5
    layers:
      - name: label
        type: text
        text: Breaking News
        transform:
          opacity:
            - time: 0
              value: 0
            - time: 1
              value: 100
  - name: Main Comp
    width: 1920
    height: 1080
    duration: 10
    framerate: 30
    folder: Renders
    layers:
      - name: bg plate
        file: bg
        transform:
          position: [960, 540]
          scale: [100, 100]
      - name: lower third
        comp: Lower Third
        transform:
          position:
            - time: 2
              value: [960, 1280]
            - time: 3
              value: [960, 980]
      - name: adjustment
        type: adjustment
        blendingMode: softLight
      - name: guide
        type: null
        threeDLayer: true
        locked: true
        shy: true</code></pre>
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-6 pb-24 sm:px-10">
        <div class="border-t border-zinc-200 pt-12">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-semibold text-zinc-900">Why use text?</h2>
            </div>
            <div class="mx-auto mt-8 max-w-3xl space-y-6 text-base leading-relaxed text-zinc-600">
                <p>
                    <span class="font-semibold text-zinc-900">Portability.</span>
                    When motion lives as text, presets and templates move between projects without exporting binary files or rebuilding scenes by hand. You can store them in a
                    repo, version them, and share them like any other creative asset.
                </p>
                <p>
                    <span class="font-semibold text-zinc-900">Simplicity.</span>
                    Text is easier to review, easier to diff, and easier to extend over time. As your needs grow, you add layers, effects, and keyframes without changing the
                    way the system works.
                </p>
                <p>
                    <span class="font-semibold text-zinc-900">Extensibility.</span>
                    Start small and scale up as the work demands it, from a single scene to a shared library of components.
                </p>
                <p>
                    <span class="font-semibold text-zinc-900">AI‑friendly.</span>
                    If an AI can read and write the same text you use, it can help draft scenes, explore variations, or build first passes — while you stay in control of the
                    final result.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-6 pb-24 sm:px-10">
        <div class="rounded-lg border border-zinc-200 bg-gradient-to-r from-zinc-900 via-zinc-800 to-zinc-900 px-10 py-12 text-white">
            <div class="flex flex-col items-start gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div class="space-y-3">
                    <p class="font-mono text-xs uppercase tracking-[0.3em] text-white/60">Get Started</p>
                    <h2 class="text-3xl font-semibold">Download and start building scenes faster.</h2>
                    <p class="text-base text-white/70">A markup language for After Effects, ready for modern studio workflows.</p>
                </div>
                <a class="btn btn-secondary animate-float-soft" href="https://github.com/seblavoie/compdown" target="_blank" rel="noreferrer">Download</a>
            </div>
        </div>
    </section>

    <footer class="border-t border-zinc-200 bg-white/70">
        <div class="mx-auto flex w-full max-w-7xl flex-col items-start justify-between gap-4 px-6 py-10 text-base text-zinc-500 sm:flex-row sm:items-center sm:px-10">
            <p>A markup language for After Effects</p>
            <div class="flex gap-4">
                <a class="hover:text-zinc-900" href="https://github.com/seblavoie/compdown" target="_blank" rel="noreferrer">GitHub</a>
                <a class="hover:text-zinc-900" href="https://github.com/seblavoie/compdown#installation" target="_blank" rel="noreferrer">Install</a>
                <a class="hover:text-zinc-900" href="https://github.com/seblavoie/compdown#features" target="_blank" rel="noreferrer">Features</a>
            </div>
        </div>
    </footer>
</body>

</html>

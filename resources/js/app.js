import Prism from "prismjs";
import "prismjs/components/prism-yaml";
import "prismjs/themes/prism-tomorrow.css";
import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const tabGroups = document.querySelectorAll("[data-code-tabs]");

    tabGroups.forEach((group) => {
        const buttons = group.querySelectorAll("[data-code-tab]");
        const panels = group.querySelectorAll("[data-code-panel]");

        const setActive = (name) => {
            buttons.forEach((button) => {
                const isActive = button.dataset.codeTab === name;
                button.setAttribute(
                    "aria-selected",
                    isActive ? "true" : "false"
                );
                button.classList.toggle("text-zinc-900", isActive);
                button.classList.toggle("text-zinc-500", !isActive);
                button.classList.toggle("border-zinc-900", isActive);
                button.classList.toggle("border-transparent", !isActive);
            });

            panels.forEach((panel) => {
                const isActive = panel.dataset.codePanel === name;
                panel.classList.toggle("hidden", !isActive);
            });
        };

        if (buttons.length > 0) {
            setActive(buttons[0].dataset.codeTab);
        }

        buttons.forEach((button) => {
            button.addEventListener("mouseenter", () => {
                setActive(button.dataset.codeTab);
            });
        });
    });

    Prism.highlightAll();
});
